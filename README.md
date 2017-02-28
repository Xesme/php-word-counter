#PHP Word Counter

[Xia's Github](https://github.com/Xesme/php-word-counter.git)

A simple webpage for a word counter, February 17th, 2017

Author: Xia Amendolara

##Description:

A program that counts the frequency of a word used in a sentence. This program was created for the second week independent project at Epicodus in Portland, Oregon.


##Specifications:
|Behavior | Input 1 | Input 2 | Output|
|------------ | ------------- | -------------| -------------|
|User can enter a word and a sentence into the program| sentence: "this is that" word: "that"| "this is that" "that"|
|The program will count how many times the given word appears in the sentence | sentence: "this is that" word: "that"| word-counter: 2|
|If the user enters a word that is not within the sentence the word-counter will return false | sentence: "Timber wolves are great" word: "that" | word-counter: "0" (FALSE)|
|The user can enter capitalized words and the word-counter will count the frequency | sentence: "The red fox jumps high through the air" word: "the" | word-counter: 2|
|If the user enters a sentence that has punctuation the word-counter will still count the frequency of the word | sentence: "The red fox jumps high through the air, and returns to the ground." word: "the"  | word-counter: 3|




##Setup and Installation Requirements:

* _Visit [Xia's Github](https://github.com/Xesme/php-word-counter.git)_
* _Click on the clone or download button_
* _Download the zip (unzip to desktop) or open in desktop_
* _Open the folder and use a text editor to open the folder_
* _If a MAC user, use the code: $ php -S localhost:8000 to initialize                 a local server.
* _In your browser copy and paste the link *http://localhost:8000/* to be directed to the homepage.
* _Viola! The homepage should be viewable in your browser and usable_


##Known Bugs:

There are no known bugs at this time.

##Support and Contact Details:

If you run into any issues, questions, or ideas please contact the creator of this program.

##Technologies Used:

This browser based program was created with:
* _PHP_
* _PHPUnit_
* _Twig_
* _Silex_
* _HTML_
* _Bootstrap_
* _CSS_

##License:

This program features MIT licensing.

*Copyright (C) 2017 Xia Amendolara*
