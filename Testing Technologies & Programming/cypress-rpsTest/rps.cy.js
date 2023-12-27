// Function to open this URL for each test
beforeEach(() => {
  // Visit the URL
  cy.visit("http://127.0.0.1:5500/rockPaperScissorsJS.html");
});


// Test "Rock" user option
describe('rock option spec', () => {
  // Play the game with "Rock" option
  it('Check the "Rock" button passes', () => {

  //   Get the "Rock" button if exist
    cy.get('[test-cy = "rock-btn"]').should("exist").click();

  //   Check that when the user click button it is set to the correct option
    cy.get('[test-cy="output-user"]').should("have.text", "Your choice is: Rock");

  //   Check the computer option
    cy.get('[test-cy="output-computer"]').then((option) => {
    //   If the computer option is set to"Rock"
      if (option.text().includes("Rock")) {
        cy.get('[test-cy="output-result"]').contains("It is a tie!");
      }
      //   If the computer option is set to"Paper"
      else if (option.text().includes("Paper")) {
        cy.get('[test-cy="output-result"]').contains("Result: Computer won!");
      }
      //   If the computer option is set to"Scissors"
      else {
        cy.get('[test-cy="output-result"]').contains("Result: You won!");
      }
    });
  })
})

// Test "Paper" user option
describe('paper option spec', () => {
  // Play the game with "Paper" option
  it('Check the "Paper" button passes', () => {

  //   Get the "Rock" button if exist
    cy.get('[test-cy = "paper-btn"]').should("exist").click();

  //   Check that when the user click button it is set to the correct option
    cy.get('[test-cy="output-user"]').should("have.text", "Your choice is: Paper");

  //   Check the computer option
    cy.get('[test-cy="output-computer"]').then((option) => {
    //   If the computer option is set to"Rock"
      if (option.text().includes("Rock")) {
        cy.get('[test-cy="output-result"]').contains("Result: You won!");
      }
      //   If the computer option is set to"Paper"
      else if (option.text().includes("Paper")) {
        cy.get('[test-cy="output-result"]').contains("It is a tie!");
      }
      //   If the computer option is set to"Scissors"
      else {
        cy.get('[test-cy="output-result"]').contains("Result: Computer won!");
      }
    });
  })
})

// Test "Scissors" user option
describe('scissors option spec', () => {
  // Play the game with "Scissors" option
  it('Check the "Scissors" button passes', () => {

  //   Get the "Rock" button if exist
    cy.get('[test-cy = "scissors-btn"]').should("exist").click();

  //   Check that when the user click button it is set to the correct option
    cy.get('[test-cy="output-user"]').should("have.text", "Your choice is: Scissors");

  //   Check the computer option
    cy.get('[test-cy="output-computer"]').then((option) => {
    //   If the computer option is set to"Rock"
      if (option.text().includes("Rock")) {
        cy.get('[test-cy="output-result"]').contains("Result: Computer won!");
      }
      //   If the computer option is set to"Paper"
      else if (option.text().includes("Paper")) {
        cy.get('[test-cy="output-result"]').contains("Result: You won!");
      }
      //   If the computer option is set to"Scissors"
      else {
        cy.get('[test-cy="output-result"]').contains("It is a tie!");
      }
    });
  })
})