Feature: edit profile
	In order to change my account information
	As a user
	I need to input the modifications in the edit page

Scenario:
	Given I am logged into my account
	And I am on "/Profile/index"
	And I click "Edit my profile"
	Then I am on "/Profile/edit"
	And I input a full name
	And I input an address
	And I input a city
	And I input a zipcode
	And I input a state
	And I click "Edit"
	Then I am on "/Profile/index"