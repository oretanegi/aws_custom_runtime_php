import numpy
#import cv2
import imagehash, difflib
from PIL import Image

dhash_a = imagehash.dhash(Image.open('./pic/test.png'))
dhash_b = imagehash.dhash(Image.open('./pic/test2.png'))
print('dhash_a = %s' % dhash_a)
print('dhash_b = %s' % dhash_b)

diff = difflib.SequenceMatcher(None, str(dhash_a), str(dhash_b)).ratio()
print('diff = %s' % diff)

#print(cv2.__version__)

