---
layout: default
title: Salesforce API Connector for WordPress
tagline: A WordPress plugin that connects your SalesForce organization to you site, enabling developers to make REST API calls
---

# A Work In Progress

At the moment this project is only a concept we are working hard to make it a reality as quickly as possible. WordPress has an amazing community of developers who constantly contribute towards the direction of its tools and functionality. Now we're putting the Salesforce community to that same test.

With the community's help, **the goal is create a simple WordPress plugin that connects the WordPress site/application to a Salesforce organization/environment**. This will enable developers to easily create SOAP/REST API calls to their org using a [Username-Password Flow](https://www.salesforce.com/us/developer/docs/api_rest/Content/intro_understanding_username_password_oauth_flow.htm)

## For Example:

- **Customer Portal** - If you ever wanted to create a custom customer portal solution this would be foundational to doing just that
- **Reports** - Perhaps you wanted a live piece of data to display in a widget, post, or page, with this API connector you could easily make a request to a reporting class in your organization and make it happen
- **Directory** - Wanting a simple way to manage your organizations staff on your WordPress site? With a quick API call to a custom APEX class you can now export a custom SOQL result to your WordPress environment and display it on a page

## Features

- **OAuth 2.0 Integration** - I want to be able to click "Login with Salesforce!" through the WordPress admin and be authenticate and API user's credentials to any organization
- **REST/SOAP Request** - I want to handle REST/SOAP API request
- **Error Handling** - This plugin should handle any errors from API request, (i.e. `ERROR: function is not available on this org` when a request to your organization doesn't exist in a class )
- **Flexibility** - This plugin will serve as a foundation to many in-house projects so its purpose is to be simple, well-documented, and mostly invisible to the development process

# Help Wanted

Are you excited about this project?! I am and I believe it could benefit many people and organizations as it combines two extremely large platforms in a powerful way. I would really appreciate any help you are willing to contribute: **advice, code, direction, etc** *-Please message me directly letting me know your interest, every little bit helps* More details about the mission and progress, including screenshots and whiteboard outlines can be found on [the documentation page](http://xtremefaith.github.io/Salesforce-API-Connector/)

# Current To Do List

- [Create a managed package](http://salesforce.stackexchange.com/questions/56752/how-to-create-a-managed-application-and-namespace-for-rest-api) - Anyone can respond to this public form to help progress this
- Create a request for a `request_token`
- Use `request_token` to get an `access_token`
- Use access token to make an API call to Salesforce
- Securely store credentials in WordPress database
- Setup OAuth 2.0 as new process for getting `access_token`

# Whiteboards

Here's a few whiteboard illustrations that will help establish a visual on where we are at and where we are going.

#### OAuth Process

![Whiteboard: OAuth Process](https://raw.githubusercontent.com/Xtremefaith/Salesforce-API-Connector/master/documentation/whiteboards/oauth-process.jpg)

# Contributors

- Nick Worth &#124; [@Xtremefaith](http://twitter.com/Xtremefaith) or [Email me directly](mailto:nick@divtruth.com)