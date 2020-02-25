import MySQLdb

db = MySQLdb.connect(
    host = 'localhost',
    user = 'jubelmakerspace',
    passwd = 'MakerTech138'
)

# cur = db.cursor()
print(db)

