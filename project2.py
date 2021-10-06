import project2Functions

print("Department Store Sales Tax and Grand Total Application")

while(True):
    print("\nData Entries: Enter 0 to end your input")
    total = 0
    while(True):
        cost = float(input("Cost of item: "))
        if cost == 0:
            print("All items total: ${:.2f}\n".format(total))
            break
        total += cost
    
    tax_rate = int(input("Sales tax rate (%): "))
    while(True):
        if not (tax_rate >= 6 and tax_rate <= 10):
            print("Tax rate should be from 6 to 10")
            tax_rate = int(input("Sales tax rate (%): "))
        else:
            break
        
    discount_amt = project2Functions.get_discount(total)
    print("\nDiscount amount: $" + str(discount_amt))
    subtotal = project2Functions.get_all_items_subtotal(total,discount_amt)
    sales_tax_amt = project2Functions.get_sales_tax(subtotal,tax_rate)
    grand_total = project2Functions.get_all_items_total(subtotal,sales_tax_amt)
    
    print("Subtotal: ${}".format(subtotal))
    print("Sales tax amount: ${}".format(sales_tax_amt))
    print("Grand total: ${:.2f}".format(grand_total))
    
    choice = input("\nContinue? y/Y/n/N: ")
    if choice == 'n' or choice == 'N':
        break

print("\nProgram is terminated")
print("\nMade by Nghia Pham, thanks for using!")