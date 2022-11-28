Feature: update password
	In order to modify the password
	As a user
	I need to be able to input the old password, the new password, and to confirm the new password

Scenario:
	Given I am logged into my account
	And I am on "/Profile/index"
	And I click on "Update password"
	And I input "1" for old password
	And I input "1" for new password
	And I input "1" for new password confirmation
	And I click "Change password"
	Then I am on "/Product/index"
	And I see the products