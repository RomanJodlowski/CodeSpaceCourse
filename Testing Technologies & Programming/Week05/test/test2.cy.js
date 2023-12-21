// Describe block to group related tests under a common title
describe('Example Cypress Test', () => {
  // Test case within the describe block
  it('Visits the Commands Actions Page and Types in Email Field', () => {
    // Visit the Commands Actions Page
    cy.visit('https://example.cypress.io/commands/actions');

  //   Query for the Email Input Field using attribute selection for input [type="email"]
    cy.get('input[type="email"]').as('emailInput');

  //   Type in Email Address into the previously queried Email Input Fields
  //   Use the alias "emailInput" to reference the element
    cy.get("@emailInput").type("test@test.com").should("have.value", "test@test.com");
    // Ensure that the input field has the expected value
  })
})