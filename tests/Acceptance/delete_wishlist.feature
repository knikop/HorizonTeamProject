Feature: delete wishlist
	In order to get rid of the wishlist
	As a user
	I need to delete my wishlist

Scenario:
	Given I am logged into my account
	And I click on my profile
	And I click on the wishlist a want
	And I click 'Delete Wishlist'
	Then I see the wishlist gone from view wishlists