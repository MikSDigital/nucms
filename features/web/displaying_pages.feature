@web_displaying_pages
Feature: Displaying page on frontend
    In order to present custom page on website
    As an visitor
    I want to be able to display single page

    Background:
        Given There are defined locales "en,pl"

    @ui
    Scenario:
        Given There are defined page with slug "page-1" and locale "en"
        When I open this page
        Then I should see the title
