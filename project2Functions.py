def get_all_items_subtotal(total,discount):
    return float("{0:.2f}".format(total - discount))

def get_sales_tax(sub_total,tax_rate):
    return float("{0:.2f}".format(sub_total * (tax_rate / 100)))
    
def get_all_items_total(sub_total,sale_tax_amt):
    return float("{0:.2f}".format(sub_total + sale_tax_amt))

def get_discount(total):
    if total < 100:
        promo_code = int(input("Promotion code: "))
        
        while(True):
            flag = True
            if promo_code == 123:
                discount_amt = 1
                return discount_amt
            elif promo_code == 456:
                discount_amt = 2
                return discount_amt
            elif promo_code == 789:
                discount_amt = 3
                return discount_amt
            elif promo_code == 0:
                discount_amt = 0
                return discount_amt
            else:
                print("Invalid promotion code. Try again")
                promo_code = int(input("Promotion code: "))
                flag = False
            
            if flag:
                break

    if total > 100:
        discount_amt = total*10/100
        return discount_amt