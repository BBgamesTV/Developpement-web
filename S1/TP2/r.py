import random
import os

def tirage():
    guess = random.randint(1,6)
    count = 0
    while(guess != 6):
        guess = random.randint(1,6)
        count+=1
    return count

compteur = 0
essai = tirage()
while essai < 70:
    compteur += 1
    essai = tirage()
    print("Vous avez réussi en ", essai ,"tirages.")
    print(compteur)
    
pour = (1/6)/compteur
print(pour)


