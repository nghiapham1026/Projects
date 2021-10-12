def display(contacts):
    for i in range(len(contacts)):
        k = contacts[i]
        print( i + 1, ". ", k[0], ", ", k[-1], sep = "")

def view(contacts):
    
    n = len(contacts)
    if n == 0:
        print("No contacts")
    
    print("Number ({} - {}): ".format(1, n), end = "")
    k= int(input())
    if k <= 0 or k > n:
        print("Invalid number. Try again!")
        return    
    
    k = contacts[k - 1]
    print(k[0], ", ", k[-1], sep = "")

def add(contacts): 
    name = input("Name: ")
    email = input("Email: ")
    phn = input("Phone: ")
    id = input("ID: ")
    contacts.append([name, email, phn, id])
    print(name, ", ", email, ", ", id, " was added.", sep="")
    return contacts

def delete(contacts):
    n = len(contacts)
    if n == 0:
        print("No contacts")
    
    print("Number ({} - {}): ".format(1, n), end = "")
    k = int(input())
    if k <= 0 or k > n:
        print("Invalid number. Try again!")
        return contacts
        
    k = contacts.pop(k-1)
    print(k[0], ", ", k[-1], " was deleted.", sep = "")
    return contacts

def display_title():
    print("Contact Management System")

def display_menu():
    print("\nCOMMAND MENU\nlist - Display all contacts\nview - View a contact\nadd - Add a contact\ndel - Delete a contact\nexit - Exit program")

def main():
    contacts = [["Betty Johnson", "betty.johnson@gmail.com", "(408) 111-2222", "3333"], ["Mark Arlington", "mark.arlington@yahoo.com", "(669) 123-4567", "4444"]]
    
    display_title()
    display_menu()
    
    while True:
        n = input("\nCommand: ")
    
        if n =='list':
            display(contacts)
        elif n =='view':
            view(contacts)
        elif n =='add':
            contacts = add(contacts)
        elif n =='del':
            contacts = delete(contacts)
        elif n =='exit':
            print("Thank you for using my app")
            break

if __name__=="__main__":
    main()