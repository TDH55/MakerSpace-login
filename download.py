import MySQLdb

db = MySQLdb.connect(
    host = 'localhost',
    user = 'jubelmakerspace',
    passwd = 'MakerTech138'
    db = 'makerspace_sign_ins'
    table = 'sign_ins'
)

print(db)
cur = db.cursor()




