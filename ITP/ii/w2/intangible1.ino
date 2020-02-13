#include <Servo.h>

#include "Adafruit_VL53L0X.h"

int average;

Adafruit_VL53L0X lox = Adafruit_VL53L0X();

Servo myservo;  // create servo object to control a servo
// twelve servo objects can be created on most boards

int irPin = 2;
volatile byte reading = 0;

int pos = 0;    // variable to store the servo position

void setup() {

  myservo.attach(9);
  Serial.begin(115200);

  // wait until serial port opens for native USB devices
  while (! Serial) {
    delay(1);
  }
  
  Serial.println("Adafruit VL53L0X test");
  if (!lox.begin()) {
    Serial.println(F("Failed to boot VL53L0X"));
    while(1);
  }
  // power 
  Serial.println(F("VL53L0X API Simple Ranging example\n\n")); 

  pinMode(irPin, INPUT_PULLUP);
}

//let's say if the beam breaker isnt broken then the distance sensor will open the door if you get close
//if the beam sensor is broken the distance sensor will make a sound or do something to indicate that the bathroom is occupied

void loop() {
  VL53L0X_RangingMeasurementData_t measure;

  reading = digitalRead(2);
  Serial.print(reading);
    
  //Serial.print("Reading a measurement... ");
  lox.rangingTest(&measure, false); // pass in 'true' to get debug data printout!


  if (measure.RangeStatus != 4) {  // phase failures have incorrect data
    //Serial.print("Distance (mm): "); Serial.println(measure.RangeMilliMeter);
  } else {
    //Serial.println(" out of range ");
  }

  if (reading == 1 && ((measure.RangeMilliMeter < 400) && (measure.RangeMilliMeter > 100))) {
    myservo.write(90);              // tell servo to go to position in variable 'pos'
    delay(15);                       // waits 15ms for the servo to reach the position
  } else if (reading == 0 && ((measure.RangeMilliMeter < 400) && (measure.RangeMilliMeter > 100))){
    //play an occupied sound
    myservo.write(0);
  } else {
    myservo.write(0);
  }
    
  delay(100);
}
