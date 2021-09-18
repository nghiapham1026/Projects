print("Employee Management System\n---------------------");
print("Your information\n---------------------");

first = input("First name: ")
print(first);
last = input("Last Name: ")
print(last);
comp = input("Company: ")
print(comp);
adds = input("Street Adress: ")
print(adds);
city = input("City: ")
print(city);
st = input("State: ")
print(st);
zipc = input("Zip Code: ")
print(zipc);
hire = input("Hire Year: ")
print(hire);

print("---------------------------\nYour Profile\n------------------");
print(last + ", " + first);
print(comp);
print(adds);
print(city + ", " + st + " " + zipc);
print("Your temporary password: " + first + "*" + last + "%" + hire);
print("Congratulations! Your profile has been created.\n-----------------------------------------------------------\nBye!");