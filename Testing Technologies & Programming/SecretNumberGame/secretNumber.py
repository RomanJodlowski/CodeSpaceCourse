import random


# function to validate the user input if it is the integer
def inputNumber(message):
    while True:
        try:
            userInput = int(input(message))
        except ValueError:
            print("Must be an integer! Try again.")
            continue
        else:
            return userInput


# Generate the random number between 1 and 20
secretNumber = random.randint(1, 20)

print("Welcome to the Secret Number Game!")

while True:
    # Take the user input
    user = inputNumber("Enter your number (between 1 and 20): ")
    if user > 20 or user < 1:
        print('The range is between 1 and 20!')
    else:
        # Compare the numbers
        if user == secretNumber:
            print("You answered is", user, ". This is the correct answer!\nGame Over!")
            break
        elif user < secretNumber:
            print("You answered is", user, ". The correct answer is higher.")
        else:
            print("You answered is", user, ". The correct answer is lower.")

