import pytube
import sys
import os

def send():

    link = sys.argv[1]

    yt = pytube.YouTube(link)

    stream = yt.streams.filter(progressive=True, file_extension='mp4').order_by('resolution').desc().first()

    return stream.url

print(send())







# yt = ptybe.YouTube()
