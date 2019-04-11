import cv2
import numpy as np

m =  cv2.imread("Eyes/100.png")
print(m.shape) 

h,w,bpp = np.shape(m)

for py in range(0,h):
    for px in range(0,w):
#can change the below logic of rgb according to requirements. In this 
#white background is changed to #e8e8e8  corresponding to 232,232,232 
#intensity, red color of the image is retained.
        if m[py][px][0] == 255 and m[py][px][1] == 255 and m[py][px][2] == 255:            
            m[py][px][0]=209
            m[py][px][1]=209
            m[py][px][2]=209
			
cv2.imshow('matrix', m)
cv2.waitKey(0)
cv2.imwrite('eyes_100.png',m)