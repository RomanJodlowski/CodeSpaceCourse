// Describe block to group related tests under a common title
describe('Example Cypress Test', () => {
  // Test case within the describe block
  it('Visits the Commands Actions Page and Interacts with Action Button an Canvas', () => {
    cy.visit('https://example.cypress.io/commands/actions');

  //   Click on the Action Button
    cy.get('.action-btn').click();

  //   Clock on the Canvas Element
    cy.get("#action-canvas").click(); // Click in the center of the element is the default

  //   Click on the Top left of the Canvas Element
    cy.get("#action-canvas").click('topLeft');

  //   Click on the Bottom Right of the Canvas Element
    cy.get("#action-canvas").click('bottomRight');
  })
})