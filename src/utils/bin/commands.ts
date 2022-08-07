// List of commands that do not require API calls

import * as bin from './index';
import config from '../../../config.json';

// Help
export const help = async (args: string[]): Promise<string> => {
  const commands = Object.keys(bin).sort().join(', ');
  var c = '';
  for (let i = 1; i <= Object.keys(bin).sort().length; i++) {
    if (i % 7 === 0) {
      c += Object.keys(bin).sort()[i - 1] + '\n';
    } else {
      c += Object.keys(bin).sort()[i - 1] + ' ';
    }
  }
  return `<p>Welcome! Here are all the available commands:</p>
<p>\n${c}\n</p>
<p>[tab]: trigger completion.</p>
<p>[ctrl+l]/clear: clear terminal.</p>
<p>Type 'sumfetch' to display summary.</p>
`;
};

// Redirection
export const repo = async (args: string[]): Promise<string> => {
  window.open(`${config.repo}`);
  return '<p>Opening Github repository...</p>';
};

// About
export const about = async (args: string[]): Promise<string> => {
  return `
<p>Hi, just call me JC,</p>
<p>Lead Engineer at WebDevStudios.com</p>
<p>More about me:</p>
<p>'sumfetch' - short summary.</p>
<p>'readme' - my github readme.</p>
<p>'company' - where I work.</p>`;
};

export const company = async (args: string[]): Promise<string> => {
  window.open(`${config.company_url}`);
  return '<p>Opening company profile...</p>';
};

// Contact
export const email = async (args: string[]): Promise<string> => {
  window.open(`mailto:${config.email}`);
  return `<p>Opening mailto:${config.email}...</p>`;
};

export const github = async (args: string[]): Promise<string> => {
  window.open(`https://github.com/${config.social.github}/`);

  return '<p>Opening github...</p>';
};

export const linkedin = async (args: string[]): Promise<string> => {
  window.open(`https://www.linkedin.com/in/${config.social.linkedin}/`);

  return '<p>Opening linkedin...</p>';
};

// Search
export const google = async (args: string[]): Promise<string> => {
  window.open(`https://google.com/search?q=${args.join(' ')}`);
  return `<p>Searching google for ${args.join(' ')}...</p>`;
};

export const duckduckgo = async (args: string[]): Promise<string> => {
  window.open(`https://duckduckgo.com/?q=${args.join(' ')}`);
  return `<p>Searching duckduckgo for ${args.join(' ')}...</p>`;
};

export const bing = async (args: string[]): Promise<string> => {
  window.open(`https://bing.com/search?q=${args.join(' ')}`);
  return `<p>Wow, really? You are using bing for ${args.join(' ')}?</p>`;
};

export const reddit = async (args: string[]): Promise<string> => {
  window.open(`https://www.reddit.com/search/?q=${args.join(' ')}</p>`);
  return `<p>Searching reddit for ${args.join(' ')}...`;
};

// Typical linux commands
export const echo = async (args: string[]): Promise<string> => {
  return args.join(' ');
};

export const whoami = async (args: string[]): Promise<string> => {
  return `<p>Today a name, tomorrow a legend.</p>`;
};

export const ls = async (args: string[]): Promise<string> => {
  window.open(`https://www.youtube.com/watch?v=ZmivKyEY1Dk`);
  return `<p>what do you want?!</p>`;
};

export const cd = async (args: string[]): Promise<string> => {
  return `<p>Don't slide down the rabbit hole. The way down is a breeze, but climbing back's a battle.</p>`;
};

export const date = async (args: string[]): Promise<string> => {
  return new Date().toString();
};

export const vi = async (args: string[]): Promise<string> => {
  return `<p>Woah, you still use 'vi'? Just try 'vim'.</p>`;
};

export const vim = async (args: string[]): Promise<string> => {
  return `<p>'vim' is so outdated. How about 'nvim'?</p>`;
};

export const nvim = async (args: string[]): Promise<string> => {
  return `<p>'nvim'? Too fancy. Why not 'emacs'?</p>`;
};

export const emacs = async (args?: string[]): Promise<string> => {
  return `<p>You know what? Just use vscode.</p>`;
};

export const sudo = async (args?: string[]): Promise<string> => {
  window.open('https://www.youtube.com/watch?v=dQw4w9WgXcQ', '_blank');
  return `Permission denied: with little power comes... no responsibility?</p>`;
};

// Banner
export const banner = (args?: string[]): string => {
  return `
<h1 class="banner-text">JC Palmes</h1>
<h3 class="banner-subtext">..    -.-. --- -.. .    ... ---    -.-- --- ..-    -.. --- -. .----. -    .... .- ...- .    - --- .-.-.-</h3>
<p>Type 'help' to see the list of available commands.</p>
<p>Type 'sumfetch' to display summary.</p>
<p>Type 'repo' or click <u><a class="text-light-blue dark:text-dark-blue underline" href="${config.repo}" target="_blank">here</a></u> for the Github repository.</p>
`;
};
