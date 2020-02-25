import mysql.connector as mysql

db = mysql.connect(
    host = 'localhost',
    user = 'jubelmakerspace',
    passwd = 'MakerTech138'
)

print(db)

