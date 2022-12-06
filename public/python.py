import sys
import os
import uuid
from rembg import remove
from PIL import Image

filename = sys.argv[1].rsplit('\\', 1)[1]
filename_removed = os.path.splitext(filename)[0] + '_removed'

input = Image.open(f"{sys.argv[1]}")
output = remove(input)
output_filename = "removed/" + filename_removed + ".png"
output.save(f"{output_filename}")

print(output_filename)
