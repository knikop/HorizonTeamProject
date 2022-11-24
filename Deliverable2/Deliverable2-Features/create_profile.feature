Feature: create profile
	In order to create an account 
	As a user
	I need to input a name, password, and email

Scenario:
	Given I am logged into my account
	And I click create profile
	Then I am redirected to the profile page
	