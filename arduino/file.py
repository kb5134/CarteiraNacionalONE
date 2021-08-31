from mysql.connector import cursor
import serial
comport = serial.Serial('COM3', 9600) 
print ('Serial Iniciada...\n')
retorno = comport.read(8)
print(retorno)
comport.close()