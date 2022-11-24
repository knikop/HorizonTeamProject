Feature: search
	In order to search the website
	As a user
	I need to be able to search the site for a product

Scenario:
	Given I am logged into my account
	And I am on the main page
	And I input the product I am looking for in the search box
	And I click 'Search'
	Then I see the product that I want