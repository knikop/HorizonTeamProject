Feature: modify profile
	In order to change my account information
	As a user
	I need to input the modifications in the update page

Scenario:
	Given I am logged into my account
	And I am on the profile page
	And I click 'edit'
	I am redirected to the modify profile page
	And I input my new username
	And I input my new contact
	And I click 'Update'
	Then I see my modified profile