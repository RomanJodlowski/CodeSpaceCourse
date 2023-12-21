import random

# Generate the random number between 1 and 20
secretNumber = random.randint(1, 20)

print("Welcome to the Secret Number Game!")

while True:
    # Take the user input
    user = int(input("Enter your number (between 1 and 20): "))

    # Compare the numbers
    if user == secretNumber:
        print("You answered is", user, ". This is the correct answer!\nGame Over!")
        break
    elif user < secretNumber:
        print("You answered is", user, ". The correct answer is higher.")
    else:
        print("You answered is", user, ". The correct answer is lower.")
