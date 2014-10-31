import Tkinter
from Tkinter import *
from PIL import *
import Image
import Tkinter as tk
import tkMessageBox
from PIL import Image, ImageTk
from bs4 import BeautifulSoup
import string
import re

root = Tk()
root.geometry('1000x1000+150+150')

#top image
im = Image.open('boat.jpeg')
im = im.resize((250, 80), Image.ANTIALIAS)
photo = ImageTk.PhotoImage(im)
logo = Label(root, image = photo)
#logo.place(x = 0, y = 0, relwidth = 1, relheight = 1)
logo.grid(row = 0, column = 0, columnspan = 2, sticky = W)

im1 = Image.open('river.jpeg')
im1 = im1.resize((250, 80), Image.ANTIALIAS)
photo1 = ImageTk.PhotoImage(im1)
logo1 = Label(root, image = photo1)
#logo.place(x = 0, y = 0, relwidth = 1, relheight = 1)
logo1.grid(row = 0, column = 2, columnspan = 2, sticky = W)

im2 = Image.open('musemum.jpeg')
im2 = im2.resize((250, 80), Image.ANTIALIAS)
photo2 = ImageTk.PhotoImage(im2)
logo2 = Label(root, image = photo2)
#logo.place(x = 0, y = 0, relwidth = 1, relheight = 1)
logo2.grid(row = 0, column = 4, columnspan = 2, sticky = W)

im3 = Image.open('house.jpeg')
im3 = im3.resize((250, 80), Image.ANTIALIAS)
photo3 = ImageTk.PhotoImage(im3)
logo3 = Label(root, image = photo3)
#logo.place(x = 0, y = 0, relwidth = 1, relheight = 1)
logo3.grid(row = 0, column = 6, columnspan = 2, sticky = W)

welcome_label = Label(root, font=('fixed', 25), text="Welcome to Indianapolis!")
welcome_label.grid(row = 1, column = 3, columnspan = 4, sticky = W)

#input
age_text = Label(root, font=('fixed', 15), text="time")
#age_entry = Entry(root, font=('fixed', 15))
like_text = Label(root, font=('fixed', 15), text="cost")
#like_entry = Entry(root, font=('fixed', 15))
gender_text = Label(root, font=('fixed', 15), text="location")
#gender_entry = Entry(root, font=('fixed', 15))
v0 = StringVar(root)
v0.set('1')
v = StringVar(root)
v.set('Free')
v2 = StringVar(root)
v2.set('North')
age_entry = OptionMenu(root,v0, '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30')
like_entry = OptionMenu(root,v, 'Free', 'Not free')
gender_entry = OptionMenu(root,v2, 'South', 'North', 'East', 'West')

age_text.grid(row = 2, column = 0)
like_text.grid(row = 2, column = 2)
gender_text.grid(row = 2, column = 4)

age_entry.grid(row = 2, column = 1, sticky = W)
like_entry.grid(row = 2, column = 3, sticky = W)
gender_entry.grid(row = 2, column = 5, sticky = W)

search_button = Button(root, text="search", width = 5, height = 1, font=('fixed', 20), command=lambda: search(v0.get(), v.get(), v2.get()))
search_button.grid(row = 2, column = 6)

#event label
label1 = Label(root, font=('fixed', 15), text="name")
label2 = Label(root, font=('fixed', 15), text="where")
label3 = Label(root, font=('fixed', 15), text="time")
label1.grid(row = 3, column = 0, sticky = W)
label2.grid(row = 3, column = 1, sticky = W)
label3.grid(row = 3, column = 2, sticky = W)

#show event data
scrollbar = tk.Scrollbar(root, orient="vertical")
list_event = Listbox(root, font=('fixed', 10), width = 20, height = 20, yscrollcommand=scrollbar.set)
list_event.grid(row = 4, column = 0, sticky = W)
list_event1 = Listbox(root, font=('fixed', 10), width = 20, height = 20, yscrollcommand=scrollbar.set)
list_event1.grid(row = 4, column = 1, sticky = W)
list_event2 = Listbox(root, font=('fixed', 10), width = 20, height = 20, yscrollcommand=scrollbar.set)
list_event2.grid(row = 4, column = 2, sticky = W)
scrollbar.config(command=list_event.yview)


im4 = Image.open('tower.jpeg')
im4 = im4.resize((200, 600), Image.ANTIALIAS)
photo4 = ImageTk.PhotoImage(im4)
logo4 = Label(root, image = photo4)
#logo.place(x = 0, y = 0, relwidth = 1, relheight = 1)
logo4.grid(row = 4, column = 3, rowspan = 3 ,columnspan = 5, sticky = W)


#movie label
label3 = Label(root, font=('fixed', 15), text="movie name")
label4 = Label(root, font=('fixed', 15), text="Theatre name")
label3.grid(row = 3, column = 5, sticky = W)
label4.grid(row = 3, column = 6, sticky = W)

#show movie data
scrollbar1 = tk.Scrollbar(root, orient="vertical")
list_event3 = Listbox(root, font=('fixed', 10), width = 20, height = 20, yscrollcommand=scrollbar1.set)
list_event3.grid(row = 4, column = 5, sticky = W)
list_event4 = Listbox(root, font=('fixed', 10), width = 20, height = 20, yscrollcommand=scrollbar1.set)
list_event4.grid(row = 4, column = 6, sticky = W)
#list_event5 = Listbox(root, font=('fixed', 10), width = 20, height = 20, yscrollcommand=scrollbar1.set)
#list_event5.grid(row = 4, column = 7, sticky = W)
scrollbar1.config(command=list_event3.yview)

#food label
label7 = Label(root, font=('fixed', 15), text="name")
label8 = Label(root, font=('fixed', 15), text="address")
label9 = Label(root, font=('fixed', 15), text="phone")
label7.grid(row = 5, column = 0, sticky = W)
label8.grid(row = 5, column = 1, sticky = W)
label9.grid(row = 5, column = 2, sticky = W)

#show food data
scrollbar2 = tk.Scrollbar(root, orient="vertical")
list_event6 = Listbox(root, font=('fixed', 10), width = 20, height = 20, yscrollcommand=scrollbar2.set)
list_event6.grid(row = 6, column = 0, sticky = W)
list_event7 = Listbox(root, font=('fixed', 10), width = 20, height = 20, yscrollcommand=scrollbar2.set)
list_event7.grid(row = 6, column = 1, sticky = W)
list_event8 = Listbox(root, font=('fixed', 10), width = 20, height = 20, yscrollcommand=scrollbar2.set)
list_event8.grid(row = 6, column = 2, sticky = W)
scrollbar2.config(command=list_event6.yview)

#landmark label
label9 = Label(root, font=('fixed', 15), text="name")
label10 = Label(root, font=('fixed', 15), text="average price")
label11 = Label(root, font=('fixed', 15), text="phone")
label9.grid(row = 5, column = 5, sticky = W)
label10.grid(row = 5, column = 6, sticky = W)
label11.grid(row = 5, column = 7, sticky = W)

#show landmark data
scrollbar3 = tk.Scrollbar(root, orient="vertical")
list_event9 = Listbox(root, font=('fixed', 10), width = 20, height = 20, yscrollcommand=scrollbar3.set)
list_event9.grid(row = 6, column = 5, sticky = W)
list_event10 = Listbox(root, font=('fixed', 10), width = 20, height = 20, yscrollcommand=scrollbar3.set)
list_event10.grid(row = 6, column = 6, sticky = W)
list_event11 = Listbox(root, font=('fixed', 10), width = 20, height = 20, yscrollcommand=scrollbar3.set)
list_event11.grid(row = 6, column = 7, sticky = W)
scrollbar3.config(command=list_event9.yview)

def search(timestr, coststr, locationstr):
	tkMessageBox.showinfo( "search box", "searching.....")
	
	#event
	data1 = open("event" + timestr + ".csv", "r")
	list_event.delete(0,15)
	list_event1.delete(0,15)
	list_event2.delete(0,15)
	for line1 in data1:
		line2 = line1.split('|')
		list_event.insert(1, "Nov " + line2[0] + "th")
		list_event1.insert(1, "Nov " + line2[1] + "th")
		list_event2.insert(1, "Nov " + line2[2] + "th")

	data2 = open("movie" + locationstr + ".csv", "r")
	list_event3.delete(0,15)
	list_event4.delete(0,15)
	for line1 in data2:
		line2 = line1.split('|')
		list_event3.insert(1, line2[2])
		list_event4.insert(1, line2[1])

	data3 = open("food" + locationstr + ".csv", "r")
	list_event6.delete(0,15)
	list_event7.delete(0,15)
	list_event8.delete(0,15)
	for line1 in data3:
		line2 = line1.split('|')
		list_event6.insert(1, line2[0])
		list_event7.insert(1, line2[1])
		list_event8.insert(1, line2[2])

	data4 = open("travel" + locationstr + ".csv", "r")
	list_event9.delete(0,15)
	list_event10.delete(0,15)
	list_event11.delete(0,15)
	if (line2[1] != "0"):
		for line1 in data4:
			line2 = line1.split('|')
			list_event9.insert(1, line2[1])
			list_event10.insert(1, line2[2])
			list_event11.insert(1, line2[3])
	else:
		print 0



root.mainloop()






















