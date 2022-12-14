Feature: purchase history
	In order to track the user's purchases
	As a user
	I need to be able to see the history of the purchases that I have made

Scenario:
	Given I am logged into my account
	And I click on my profile
	And I click 'View Purchase History'
	Then I am redirected to the purchase history page