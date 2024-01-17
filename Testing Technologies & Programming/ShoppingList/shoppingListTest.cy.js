// Function to open this URL for each test
beforeEach(() => {
  // Visit the URL
  cy.visit("http://127.0.0.1:5500/shoppingList.html"); //VS
});


describe('Shopping list spec', () => {

// Adding and remowing items on the shopping list
  it('Add and remove an item to/from the shopping list', () => {

    // Create variable with the new item input
    const newItem = 'new item';

    // Enter a new item in the input field
    cy.get('[test-cy = "write-list"]').type(newItem);

    // Click the "Add Item" button
    cy.get('[test-cy = "add-btn"]').click();

    // Check that the new item is added to the shopping list
    cy.get('[test-cy = "ul"]').should('contain', newItem);

    // Find and click the remove item button
cy.contains('li', newItem).find('.remove').click();

// Confirm that the item is no longer in the shopping list
cy.get('[test-cy = "ul"]').should('not.contain', newItem);

  });

  it('Require item input when is confirmed but not entered', () => {
    // Click the "Add Item" button without entering any item
    cy.get('[test-cy = "add-btn"]').click();

    // Get message that the form is not submitted and no item is entered
    cy.get('[test-cy = "ul"]').should('not.contain', 'li');
  });
});
