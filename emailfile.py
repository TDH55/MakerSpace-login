import smtplib
from email.mime.multipart import MIMEMultipart 
from email.mime.text import MIMEText 
from email.mime.base import MIMEBase 
from email import encoders 
from datetime import date

fromaddr = "jubelmakerspace@gmail.com"
toaddr = "jubelmakerspace@gmail.com"

msg = MIMEMultipart() 

# instance of MIMEMultipart 
msg = MIMEMultipart() 
  
# storing the senders email address   
msg['From'] = fromaddr 
  
# storing the receivers email address  
msg['To'] = toaddr 
  
# storing the subject  
msg['Subject'] = "MakerSpace sign in sheet"

# string to store the body of the mail 
body = ""
  
# attach the body with the msg instance 
msg.attach(MIMEText(body, 'plain')) 

# open the file to be sent  
today = date.today()
d = today.strftime("%d-%m-%y")
filename = "signins_" +str(today)+".csv"

attachment = open("/home/pi/Documents/" + filename, "rb") 

# instance of MIMEBase and named as p 
p = MIMEBase('application', 'octet-stream') 
  
# To change the payload into encoded form 
p.set_payload((attachment).read()) 
  
# encode into base64 
encoders.encode_base64(p) 
   
p.add_header('Content-Disposition', "attachment; filename= %s" % filename) 
  
# attach the instance 'p' to instance 'msg' 
msg.attach(p) 
  
# creates SMTP session 
s = smtplib.SMTP('smtp.gmail.com', 587) 
  
# start TLS for security 
s.starttls() 

# Authentication 
s.login(fromaddr, "Jubel138!") 
  
# Converts the Multipart msg into a string 
text = msg.as_string() 
  
# sending the mail 
s.sendmail(fromaddr, toaddr, text) 
  
# terminating the session 
s.quit() 