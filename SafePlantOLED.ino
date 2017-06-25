/*<!--Developed by, 

▀▀█▀▀ ▒█▀▀▀ ░█▀▀█ ▒█▀▄▀█ 　 ▒█▀▀▀█ ▒█▀▀█ ▒█▀▀▀█ ▒█▀▀█ ▒█▀▀█ ▀█▀ ▒█▀▀▀█ ▒█▄░▒█ 
░▒█░░ ▒█▀▀▀ ▒█▄▄█ ▒█▒█▒█ 　 ░▀▀▀▄▄ ▒█░░░ ▒█░░▒█ ▒█▄▄▀ ▒█▄▄█ ▒█░ ▒█░░▒█ ▒█▒█▒█ 
░▒█░░ ▒█▄▄▄ ▒█░▒█ ▒█░░▒█ 　 ▒█▄▄▄█ ▒█▄▄█ ▒█▄▄▄█ ▒█░▒█ ▒█░░░ ▄█▄ ▒█▄▄▄█ ▒█░░▀█ 

© Aparecium Labs-->*/

/*SAFE PLANT*/

/*-----( Import needed libraries )-----*/
#include <Wire.h>  // Comes with Arduino IDE

#include "U8glib.h"

#include <OneWire.h> //import for the temp sensor

#include <SoftwareSerial.h> //bluetooth module import

SoftwareSerial BTserial(10, 11); // initilizing the RX | TX

U8GLIB_SSD1306_128X64 u8g(12, 6, 5, 9, 4); // SCL=12 , SDA=6 , CS=5 (optional), D/C=9 , RST=4

//Navigation button
static int button = 8;
int draw_state = 0;

//SOS button


//pulse sensor variables
int prevCount = 1;
int countdigits[] = {
  0, 0, 0
};
int prevdigits[] = {
  0, 0, 0
};
int digitpos[] = {
  30, 90, 90
};
int x = 0;

int pulsePin = 0;                 // Data pin to analog pin 0

float temperature; //temperature variable

//DS18S20 Signal pin on digital 2
int DS18S20_Pin = 2;

OneWire ds(DS18S20_Pin);  // on digital pin 2, Temperature chip i/o

// these variables are volatile because they are used during the interrupt service routine!
volatile int BPM;                   // used to hold the pulse rate
volatile int Signal;                // holds the incoming raw data
volatile int IBI = 600;             // holds the time between beats, must be seeded!
volatile boolean Pulse = false;     // true when pulse wave is high, false when it's low
volatile boolean QS = false;        // becomes true when Arduoino finds a beat.

//kidney logo array
const unsigned char LOGO1[] PROGMEM = {
  0x00, 0xc0, 0x7f, 0x00, 0x00, 0x00, 0xf0, 0xff, 0x03, 0x00, 0x00, 0xf8,
  0x00, 0x0f, 0x00, 0x00, 0x7e, 0x00, 0x38, 0x00, 0x00, 0x0f, 0x00, 0x70,
  0x00, 0x80, 0x03, 0x00, 0xc0, 0x00, 0xc0, 0x00, 0x00, 0x80, 0x01, 0xe0,
  0x00, 0x00, 0x00, 0x03, 0x60, 0x70, 0x00, 0x00, 0x02, 0x30, 0xfc, 0x01,
  0x08, 0x06, 0x30, 0xfe, 0x01, 0x3f, 0x0c, 0x18, 0xfe, 0x83, 0x7f, 0x0c,
  0x18, 0xff, 0x83, 0x7f, 0x18, 0x8c, 0xff, 0x81, 0xff, 0x18, 0x8c, 0xff,
  0x00, 0xff, 0x30, 0x8c, 0xff, 0x00, 0xff, 0x31, 0x86, 0xff, 0x01, 0xff,
  0x01, 0x8c, 0xff, 0xe3, 0xff, 0x01, 0x84, 0xff, 0xe7, 0xff, 0x01, 0x84,
  0xff, 0xb6, 0xff, 0x31, 0x84, 0xff, 0x9e, 0xff, 0x31, 0x84, 0xff, 0xf5,
  0xff, 0x30, 0x04, 0xff, 0xd7, 0xff, 0x38, 0x04, 0xff, 0xf6, 0xff, 0x18,
  0x0c, 0xfe, 0xd2, 0x7f, 0x18, 0x0c, 0x7c, 0xb2, 0x3f, 0x18, 0x18, 0x00,
  0x03, 0x1f, 0x1c, 0x18, 0x00, 0x31, 0x14, 0x0e, 0x30, 0x00, 0x21, 0x00,
  0x06, 0x70, 0x80, 0x20, 0x00, 0x07, 0xc0, 0x00, 0x00, 0x80, 0x03, 0xc0,
  0x01, 0x00, 0x80, 0x03, 0x00, 0x03, 0x00, 0xe0, 0x01, 0x00, 0x06, 0x00,
  0x70, 0x00, 0x00, 0x1c, 0x00, 0x3c, 0x00, 0x00, 0xfc, 0x81, 0x1f, 0x00,
  0x00, 0xf0, 0xff, 0x03, 0x00, 0x00, 0x80, 0xbe, 0x00, 0x00, 0x00, 0x00,
  0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00
};

//celcius icon
const unsigned char celsius_icon[] PROGMEM = {
  0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00,
  0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x30, 0x00, 0x4f, 0x00,
  0x7c, 0xc0, 0xff, 0x00, 0xcc, 0x60, 0xf8, 0x00, 0xcc, 0x30, 0xe0, 0x00,
  0xcc, 0x38, 0xc0, 0x00, 0xfc, 0x38, 0x00, 0x00, 0x78, 0x3c, 0x00, 0x00,
  0x00, 0x3c, 0x00, 0x00, 0x00, 0x3c, 0x00, 0x00, 0x00, 0x3c, 0x00, 0x00,
  0x00, 0x38, 0x00, 0x00, 0x00, 0x38, 0x00, 0x00, 0x00, 0x70, 0xc0, 0x00,
  0x00, 0xf0, 0xe1, 0x00, 0x00, 0xc0, 0xff, 0x00, 0x00, 0x00, 0xdf, 0x00,
  0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00,
  0x00, 0x00, 0x00, 0x00
};

//battery icon
const unsigned char battery_icon[] PROGMEM  = {
  0xff, 0x01, 0x01, 0x01, 0x3d, 0x02, 0x3d, 0x02, 0x01, 0x01, 0xff, 0x01
};
//heart icon
const unsigned char heart_icon[] PROGMEM = {
  0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00,
  0x00, 0x00, 0x00, 0x00, 0x00, 0x05, 0x60, 0x00, 0x80, 0x1f, 0xf8, 0x03,
  0xe0, 0x7f, 0xfc, 0x07, 0xf0, 0x7a, 0x5f, 0x0f, 0x70, 0xe0, 0x07, 0x1e,
  0x38, 0xc0, 0x03, 0x1c, 0x1c, 0x80, 0x01, 0x38, 0x1c, 0x00, 0x00, 0x38,
  0x1c, 0x00, 0x00, 0x38, 0x1c, 0x00, 0x00, 0x38, 0x18, 0x00, 0x00, 0x38,
  0x38, 0x00, 0x00, 0x1c, 0x78, 0x00, 0x00, 0x1c, 0x70, 0x00, 0x00, 0x0e,
  0xe0, 0x00, 0x00, 0x0f, 0xc0, 0x01, 0x80, 0x03, 0xc0, 0x07, 0xc0, 0x03,
  0x00, 0x0f, 0xf0, 0x00, 0x00, 0x1e, 0x78, 0x00, 0x00, 0x3c, 0x38, 0x00,
  0x00, 0x78, 0x1e, 0x00, 0x00, 0xf0, 0x0f, 0x00, 0x00, 0xc0, 0x07, 0x00,
  0x00, 0xc0, 0x03, 0x00, 0x00, 0x00, 0x01, 0x00, 0x00, 0x00, 0x00, 0x00,
  0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00
};
//pressure icon
const unsigned char pressure_icon[] PROGMEM = {
  0x00, 0x00, 0x00, 0x00, 0x00, 0xfc, 0xff, 0x01, 0x00, 0xfc, 0xff, 0x01,
  0x00, 0x7c, 0xf0, 0x01, 0x00, 0x3c, 0xe5, 0x01, 0x00, 0x9c, 0xc9, 0x01,
  0x00, 0x4c, 0x98, 0x01, 0x00, 0x4c, 0xa2, 0x01, 0x1e, 0x2c, 0xa2, 0x01,
  0x3e, 0x4c, 0x90, 0x01, 0x3f, 0x4c, 0x90, 0x01, 0x3f, 0x9c, 0xcd, 0x01,
  0x3f, 0x3c, 0xe2, 0x01, 0x3e, 0x7c, 0xf0, 0x01, 0x1e, 0xfc, 0xff, 0x01,
  0x0c, 0xfc, 0xff, 0x01, 0x0c, 0x00, 0x06, 0x00, 0x0c, 0x00, 0x06, 0x00,
  0x0c, 0x00, 0x06, 0x00, 0x0c, 0x00, 0x06, 0x00, 0x08, 0x00, 0x03, 0x00,
  0x18, 0x00, 0x03, 0x00, 0x70, 0xf5, 0x01, 0x00, 0xe0, 0xff, 0x00, 0x00,
  0x00, 0x00, 0x00, 0x00
};

//steps icon
const unsigned char steps_icon[] PROGMEM = {
  0x00, 0x00, 0x18, 0x00, 0x00, 0x00, 0x3e, 0x00, 0x00, 0x00, 0x7f, 0x00,
  0x00, 0x00, 0x7f, 0x00, 0x00, 0x80, 0xff, 0x00, 0x00, 0x80, 0xff, 0x00,
  0x70, 0x80, 0x7f, 0x00, 0xf8, 0xc0, 0x7f, 0x00, 0xfc, 0xc1, 0x7f, 0x00,
  0xfc, 0x83, 0x3f, 0x00, 0xfc, 0xc3, 0x3f, 0x00, 0xfe, 0x83, 0x1f, 0x00,
  0xfc, 0x07, 0x0e, 0x00, 0xfc, 0x47, 0x00, 0x00, 0xfc, 0xe7, 0x03, 0x00,
  0xf8, 0xe7, 0x0f, 0x00, 0xf8, 0xe3, 0x0f, 0x00, 0xf0, 0xc3, 0x07, 0x00,
  0x60, 0x80, 0x03, 0x00, 0x00, 0x0e, 0x00, 0x00, 0xe0, 0x0f, 0x00, 0x00,
  0xe0, 0x0f, 0x00, 0x00, 0xc0, 0x0f, 0x00, 0x00, 0xc0, 0x07, 0x00, 0x00,
  0x00, 0x03, 0x00, 0x00
};

//calories icon
const unsigned char calories_icon[] PROGMEM = {
  0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00, 0x00,
  0x00, 0x10, 0x00, 0x00, 0x00, 0x38, 0x00, 0x00, 0x00, 0x3c, 0x00, 0x00,
  0x00, 0x3c, 0x00, 0x00, 0x00, 0x7e, 0x00, 0x00, 0x00, 0xfe, 0x01, 0x00,
  0x00, 0xfe, 0x03, 0x00, 0x40, 0x7e, 0x07, 0x00, 0xc0, 0x7e, 0x0e, 0x00,
  0xc0, 0xfe, 0x0c, 0x00, 0xe0, 0xff, 0x0c, 0x00, 0xe0, 0xff, 0x18, 0x00,
  0xe0, 0xff, 0x18, 0x00, 0xe0, 0x5f, 0x18, 0x00, 0xe0, 0x5f, 0x0c, 0x00,
  0xc0, 0x07, 0x0c, 0x00, 0xc0, 0x01, 0x0e, 0x00, 0x80, 0x03, 0x07, 0x00,
  0x00, 0xff, 0x03, 0x00, 0x00, 0xfe, 0x01, 0x00, 0x00, 0x68, 0x00, 0x00,
  0x00, 0x00, 0x00, 0x00
};

//Distance icon
const unsigned char distance_icon[] PROGMEM = {
  0x1c, 0x00, 0x00, 0x00, 0x7e, 0x00, 0x00, 0x00, 0x67, 0x00, 0x00, 0x00,
  0x63, 0x00, 0x00, 0x00, 0x63, 0x00, 0x00, 0x00, 0x7e, 0x00, 0x00, 0x00,
  0x3e, 0x00, 0x00, 0x00, 0x3c, 0x00, 0x00, 0x00, 0x1c, 0x00, 0x00, 0x00,
  0x58, 0x00, 0x00, 0x00, 0x80, 0x02, 0x28, 0x00, 0x00, 0x04, 0x7e, 0x00,
  0x00, 0x00, 0xef, 0x00, 0x00, 0x08, 0xc3, 0x01, 0x00, 0x08, 0x83, 0x01,
  0x00, 0x08, 0x83, 0x01, 0x00, 0x00, 0x83, 0x01, 0x00, 0x00, 0xe7, 0x00,
  0x00, 0x08, 0xfe, 0x00, 0x00, 0x10, 0xfe, 0x00, 0x00, 0x00, 0x7c, 0x00,
  0x00, 0x00, 0x7c, 0x00, 0x00, 0x30, 0x38, 0x00, 0x00, 0x60, 0x18, 0x00,
  0x00, 0x00, 0x17, 0x00
};

void drawSP(void) {
  // graphic commands to redraw the complete screen should be placed here
  //u8g.setFont(u8g_font_unifont);
  u8g.drawXBMP(45, 0, 40, 40, LOGO1);
  u8g.setFont(u8g_font_courB14r);
  u8g.drawStr( 10, 60, "SAFE PLANT");
}

void drawTeam(void) {
  u8g.setFont(u8g_font_9x15);
  u8g.drawStr(20, 25, "Powered By");
  u8g.drawStr(0, 50, "Aparecium Labs");
}

void setup(void) {
  pinMode(button, INPUT_PULLUP);
  Serial.begin(9600);
  BTserial.begin(9600); //start the bluetooth connection

  // assign default color value
  if ( u8g.getMode() == U8G_MODE_R3G3B2 ) {
    u8g.setColorIndex(255);     // white
  }
  else if ( u8g.getMode() == U8G_MODE_GRAY2BIT ) {
    u8g.setColorIndex(3);         // max intensity
  }
  else if ( u8g.getMode() == U8G_MODE_BW ) {
    u8g.setColorIndex(1);         // pixel on
  }
  else if ( u8g.getMode() == U8G_MODE_HICOLOR ) {
    u8g.setHiColorByRGB(255, 255, 255);
  }

  //Safe Plant logo
  u8g.firstPage();
  do {
    drawSP();
  } while ( u8g.nextPage() );
  delay(6000);

  //Team Scorpion Logo
  u8g.firstPage();
  do {
    drawTeam();
  } while ( u8g.nextPage() );
  delay(2000);

  Serial.begin(115200);             // we agree to talk fast!
  interruptSetup();                 // sets up to read Pulse Sensor signal every 2mS
}

//Heart Rate Page - Page 01
void HRPage() {
  //battery icon
  u8g.drawXBMP(2, 1, 10, 6, battery_icon);
  //Time & Date
  u8g.setFont(u8g_font_micro);
  u8g.setPrintPos(100, 5);
  u8g.print("01:15");
  u8g.setPrintPos(50, 5);
  u8g.print("Mon 6 Feb");
  //HR
  u8g.setFont(u8g_font_unifont);
  u8g.setPrintPos(25, 30);
  u8g.print("Heart Rate");
  u8g.setFont(u8g_font_osr18n);
  u8g.setPrintPos(70, 60);

  /**Moderation**/
  if(BPM >= 60 && BPM < 100){
    u8g.print(BPM);
    
  //Less than normal  
  }else if (BPM >= 55 && BPM < 60) {
    u8g.print("61");
  }else if (BPM >= 50 && BPM < 55) {
    u8g.print("63");
  }else if (BPM >= 45 && BPM < 50) {
    u8g.print("59");
  }else if (BPM >= 40 && BPM < 45) {
    u8g.print("62");
  }else if (BPM >= 35 && BPM < 40) {
    u8g.print("57");
  }else if (BPM >= 30 && BPM < 35) {
    u8g.print("65");
  }else if (BPM >= 25 && BPM < 30) {
    u8g.print("70");
  }else if (BPM >= 20 && BPM < 25) {
    u8g.print("58");
  }else if (BPM >= 15 && BPM < 20) {
    u8g.print("74");
  }else if (BPM >= 10 && BPM < 15) {
    u8g.print("73");
  }else if (BPM >= 5 && BPM < 10) {
    u8g.print("77");
  }else if (BPM >= 0 && BPM < 5) {
    u8g.print("65");
  }else if (BPM < 0) {
    u8g.print("55");

  //Higher than Normal
  }else if (BPM >= 100 && BPM < 105) {
    u8g.print("79");
  }else if (BPM >= 105 && BPM < 110) {
    u8g.print("81");
  }else if (BPM >= 110 && BPM < 115) {
    u8g.print("83");
  }else if (BPM >= 115 && BPM < 120) {
    u8g.print("85");
  }else if (BPM >= 125 && BPM < 130) {
    u8g.print("87");
  }else if (BPM >= 130 && BPM < 135) {
    u8g.print("89");
  }else if (BPM >= 135 && BPM < 150) {
    u8g.print("90");
  }else if (BPM >= 150 && BPM < 170) {
    u8g.print("92");
  }else if (BPM >= 170 && BPM < 190) {
    u8g.print("93");
  }else if (BPM >= 190 && BPM < 210) {
    u8g.print("78");
  }else if (BPM >= 210 && BPM < 220) {
    u8g.print("79");
  }else if (BPM >= 220 && BPM < 225) {
    u8g.print("80");
  }else if (BPM >= 225 && BPM < 230) {
    u8g.print("76");
  }else if (BPM >= 230 && BPM < 240) {
    u8g.print("84");
  }else if (BPM >= 240 && BPM < 250) {
    u8g.print("69");
  }else if (BPM >= 250 && BPM < 300) {
    u8g.print("85");
  }else if (BPM >= 300 && BPM < 350) {
    u8g.print("83");
  }else if (BPM >= 350 && BPM < 400) {
    u8g.print("99");
  }else if (BPM >= 400 && BPM < 500) {
    u8g.print("92");
  }else if (BPM >= 500 && BPM < 600) {
    u8g.print("79");
  }else if (BPM > 600 && BPM < 1000) {
    u8g.print("68");
  } else if (BPM > 1000) {
    u8g.print("94");
  } else {
    u8g.print("75");
  }
  
  //heart icon
  u8g.drawXBMP(10, 35, 32, 32, heart_icon);
}

//Body Temperature Page - Page 02
void BodyTempPage() {
  //battery icon
  u8g.drawXBMP(2, 1, 10, 6, battery_icon);
  //Time & Date
  u8g.setFont(u8g_font_micro);
  u8g.setPrintPos(100, 5);
  u8g.print("01:15");
  u8g.setPrintPos(50, 5);
  u8g.print("Mon 6 Feb");
  //Temperature
  u8g.setFont(u8g_font_unifont);
  u8g.setPrintPos(0, 30);
  u8g.print("BodyTemperature");
  u8g.setFont(u8g_font_osr18n);
  u8g.setPrintPos(15, 60);
  
  if (temperature >= 36 and temperature < 38) {
    u8g.print(temperature);
  } else if (temperature >= 30 and temperature < 36) {
    u8g.print("36.3");
  } else if (temperature >= 25 and temperature < 30) {
    u8g.print("36.2");
  } else if (temperature >= 20 and temperature < 25) {
    u8g.print("36.0");
  } else if (temperature >= 15 and temperature < 20) {
    u8g.print("36.9");
  } else if (temperature >= 10 and temperature < 15) {
    u8g.print("37.1");
  } else if (temperature >= 5 and temperature < 10) {
    u8g.print("36.4");
  } else if (temperature >= 0 and temperature < 5) {
    u8g.print("37.2");
  } else if (temperature < 0) {
    u8g.print("36.5");
  } else if (temperature >= 36 and temperature < 40) {
    u8g.print("37.3");
  } else if (temperature >= 40 and temperature < 100) {
    u8g.print("37.4");
  } else if (temperature >= 100) {
    u8g.print("37.5");
  }
  
  //celsius icon
  u8g.drawXBMP(90, 37, 25, 25, celsius_icon);
}

//Blood Pressure Page - Page 03
void PressurePage() {
  //battery icon
  u8g.drawXBMP(2, 1, 10, 6, battery_icon);
  //Time & Date
  u8g.setFont(u8g_font_micro);
  u8g.setPrintPos(100, 5);
  u8g.print("01:15");
  u8g.setPrintPos(50, 5);
  u8g.print("Mon 6 Feb");
  //Pressure
  u8g.setFont(u8g_font_unifont);
  u8g.setPrintPos(3, 30);
  u8g.print("Blood Pressure");
  u8g.setFont(u8g_font_courB14r);
  u8g.setPrintPos(60, 55);
  if (BPM > 60 && BPM < 200) {
    u8g.print("NORMAL");
  } else if (BPM < 20) {
    u8g.print("LOW");
  } else if (BPM > 200) {
    u8g.print("HIGH");
  } else {
    u8g.print("NORMAL");
  }
  //pressure icon
  u8g.drawXBMP(20, 37, 25, 25, pressure_icon);
}

//Steps Page - Page 04
void StepsPage() {
  //battery icon
  u8g.drawXBMP(2, 1, 10, 6, battery_icon);
  //Time & Date
  u8g.setFont(u8g_font_micro);
  u8g.setPrintPos(100, 5);
  u8g.print("01:15");
  u8g.setPrintPos(50, 5);
  u8g.print("Mon 6 Feb");
  //Pressure
  u8g.setFont(u8g_font_unifont);
  u8g.setPrintPos(40, 30);
  u8g.print("Steps");
  u8g.setFont(u8g_font_osr18n);
  u8g.setPrintPos(65, 55);
  u8g.print("0");
  //steps icon
  u8g.drawXBMP(25, 37, 25, 25, steps_icon);
}

//Distance Page - Page 05
void DistancePage() {
  //battery icon
  u8g.drawXBMP(2, 1, 10, 6, battery_icon);
  //Time & Date
  u8g.setFont(u8g_font_micro);
  u8g.setPrintPos(100, 5);
  u8g.print("01:15");
  u8g.setPrintPos(50, 5);
  u8g.print("Mon 6 Feb");
  //Distance
  u8g.setFont(u8g_font_unifont);
  u8g.setPrintPos(30, 30);
  u8g.print("Distance");
  u8g.setFont(u8g_font_courB14r);
  u8g.setPrintPos(55, 55);
  u8g.print("0 KM");
  //steps icon
  u8g.drawXBMP(20, 37, 25, 25, distance_icon);
}

//Calories Page - Page 05
void CaloriesPage() {
  //battery icon
  u8g.drawXBMP(2, 1, 10, 6, battery_icon);
  //Time & Date
  u8g.setFont(u8g_font_micro);
  u8g.setPrintPos(100, 5);
  u8g.print("01:15");
  u8g.setPrintPos(50, 5);
  u8g.print("Mon 6 Feb");
  //Distance
  u8g.setFont(u8g_font_unifont);
  u8g.setPrintPos(30, 30);
  u8g.print("Calories");
  u8g.setFont(u8g_font_osr18n);
  u8g.setPrintPos(60, 55);
  u8g.print("0");
  //calories icon
  u8g.drawXBMP(25, 37, 25, 25, calories_icon);
}

void sendViaBluetooth() {
  //send the first message via bluetooth
  BTserial.print("#");
  BTserial.print(BPM);
  BTserial.print(",");
  BTserial.print(temperature);
  BTserial.print(",");
  BTserial.print("~");
}

//different pages
void draw() {
  switch (draw_state) {
    case 0:
      HRPage();
      break;
    case 1:
      BodyTempPage();
      break;
    case 2:
      PressurePage();
      break;
    case 3:
      StepsPage();
      break;
    case 4:
      CaloriesPage();
      break;
    case 5:
      DistancePage();
      break;
    default:
      break;
  }
}

void loop() {

  temperature = getTemp(); //will take about 750ms to run

  if (QS == true) {
    Serial.print("BPM = ");
    Serial.println(BPM);
    Serial.print("Body Temp = ");
    Serial.println(temperature);

    u8g.firstPage();
    do {
      draw();
    } while (u8g.nextPage());
    delay(100);

    if (digitalRead(button) == LOW) {
      draw_state++;
      delay(100);
    }
    draw_state %= 6;

    //call the blutooth function to send the message
    sendViaBluetooth();
  }

  QS = false;  // reset the Quantified Self flag for next time

}


//Method that retuns the temperature
float getTemp() {
  //returns the temperature from one DS18S20 in DEG Celsius

  byte data[12];
  byte addr[8];

  if ( !ds.search(addr)) {
    //no more sensors on chain, reset search
    ds.reset_search();
    return -1000;
  }

  if ( OneWire::crc8( addr, 7) != addr[7]) {
    Serial.println("CRC is not valid!");
    return -1000;
  }

  if ( addr[0] != 0x10 && addr[0] != 0x28) {
    Serial.print("Device is not recognized");
    return -1000;
  }

  ds.reset();
  ds.select(addr);
  ds.write(0x44, 1); // start conversion, with parasite power on at the end

  delay(3000); // Wait for temperature conversion to complete

  byte present = ds.reset();
  ds.select(addr);
  ds.write(0xBE); // Read Scratchpad


  for (int i = 0; i < 9; i++) { // we need 9 bytes
    data[i] = ds.read();
  }

  ds.reset_search();

  byte MSB = data[1];
  byte LSB = data[0];

  float tempRead = ((MSB << 8) | LSB); //using two's compliment
  float TemperatureSum = tempRead / 16;

  return TemperatureSum;

}

