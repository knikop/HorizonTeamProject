Feature: search
	In order to search the website
	As a user
	I need to be able to search the site for a product

Scenario:
	Given I am logged into my account
	And I am on "/Product/index"
	And I input "Gaming chair" for the search term
	And I click "Search" icon
	Then I see the Gaming chair