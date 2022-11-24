Feature: create wishlist
	In order to make a wishlist
	As a user
	I need to create my wishlist

Scenario:
	Given I am logged into my account
	And I click on my profile
	And I click on 'Create a new Wishlist'
	And I enter the name and description
	And I click 'Create'
	Then I see the wishlist in view wishlists