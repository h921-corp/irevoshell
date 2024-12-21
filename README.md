# irevoshell
A C&C server written in PHP, because i got bored i guess.<br>
WARNING: This program was made for educational reasons only! I am not responsible for any harm or illegal actions commited using irevoshell!<br>
I made this program for fun, and made it as an educational product, to learn the in's and out's of malware!<br>
Any illegal use will not be tolerated!<br>
<hr>
irevoshell reads from a database called "pcs" and a table called "todo". When a PC sends a GET request to the server with the parameter "getmethenewest" set, it will return the highest existing PCID + 1.<br>
When the GET parameters "whatdoido" (just returns anything) and "mynumber" (returns the PCID, stored locally and to be read with python) are set, it will echo out all the things to do, so that the python script can read what actions have to be done. File uploading will be done via the download.php file, which is yet to be created.<br>
