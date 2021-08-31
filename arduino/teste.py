

#!/usr/bin/python
# -*- coding: iso-8859-1 -*-
import serial
comport = serial.Serial('COM3', 9600) 
print ('Serial Iniciada...\n')
import mysql.connector
cnx = mysql.connector.connect(user='root', password='', host='127.0.0.1', database='cadastrar')
cursor = cnx.cursor()
add_sinais = ("INSERT INTO teste (id) VALUES (%s)")

serialValue = comport.read(8)
data_sinais = str(serialValue)
print (data_sinais)
global retorno
retorno = data_sinais


cursor.execute(add_sinais, retorno)
cnx.commit()
cursor.close()
cnx.close()
comport.close()