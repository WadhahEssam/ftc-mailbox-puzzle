# FTC Mailbox Puzzle
a simple puzzle created for students at King Saud University where participants has to unravel hidden message 

## Try it
https://ftc-mailbox-puzzle.herokuapp.com

## Question
<p align="center">
  <img height="600px" src="https://github.com/WadhahEssam/ftc-mailbox-puzzle/blob/master/question.jpeg?raw=true"/>
</p>
Bottomline:
Find the content of the message with the title ( Messasge #1 )

## Winners 
Three people solved this challgend 
1) Thamer Al-Daoowd
2) Mohanad
3) Abdullah

## Inspiration 
if you want to try and solve it yourself, do not watch the video
This challenge is inspired by this vedio https://www.youtube.com/watch?v=rE6q2YsYfp8&t=559s, hosted by Haseeb Qureshi 

## Solution 
if you want to try and solve it yourself, do not read the following
- the way to solve this puzzle is in two parts :
1) first, discovering the trick or the bug in the website which is placed in the search functionality which is if you search for any word the website will check if it is either inside the ( title + content + from ) fields.
2) second, writing a program that keeps trying new character until the message with the Message#1 title comes up then you go another character.

solution code is included in solution.js
you need to install npm and puppeteer in order try it
however you can write the solution using any technology or programming language.


## Technologies Uesd
- Laravel 5.7
- Heroku ( for deployment )
