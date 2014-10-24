#!/usr/bin/python2.7
import time, picamera
with picamera.PiCamera() as camera:
    # Initial settings of the camera
    camera.preview_fullscreen = True
   # camera.resolution = (100, 100)
    camera.preview_window = (620, 320, 640, 480)
    camera.exposure_mode = 'auto'
    camera.vflip = True
    camera.hflip = True
    # Start Preview
    camera.start_preview()
    time.sleep(3) # Waiting for the camera to adjust
    camera.capture('img/img001.jpg')
   # camera.shutter_speed = 6000000
   # camera.exposure_mode = 'off'
   # camera.iso = 800
   #for filename in camera.capture_continuous('img/img{counter:03d}.jpg'):
        #print('Captured %s' % filename)
        #time.sleep(3) # wait 5 seconds between each shot

