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

# c = csv.writer(open(filename, 'wb'))
# for x in result:
#     c.writerow(x)


with open('persons.csv', 'wb') as csvfile:
    filewriter = csv.writer(csvfile, delimiter=',',
                            quotechar='|', quoting=csv.QUOTE_MINIMAL)
    filewriter.writerow(['Name', 'Profession'])
    filewriter.writerow(['Derek', 'Software Developer'])
    filewriter.writerow(['Steve', 'Software Developer'])
    filewriter.writerow(['Paul', 'Manager'])



