import MySQLdb
import sys
import csv
from datetime import date

db = MySQLdb.connect(
    host = 'localhost',
    user = 'jubelmakerspace',
    passwd = 'MakerTech138',
    database = 'makerspace_sign_in'
)
today = date.today()
d = today.strftime("%d-%m-%y")
filename = "signins_" +str(today)+".csv"
print(filename)


QUERY='SELECT * FROM sign_ins;'


print(db)
cur = db.cursor()
cur.execute(QUERY)
result = cur.fetchall()

c = csv.writer(open(filename, 'wb'))
for x in result:
    c.writerow(x)




