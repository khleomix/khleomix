import config from '../../../config.json';

const sumfetch = async (args: string[]): Promise<string> => {
return `

<h2>ξ༼ つ ◕_◕ ༽つ☕🍪</h2>
<h1>Summary Display</h1>

<h2>⊂(ξ(✿ っ☉ω☉)っ˳.⋅ઇଓ</h2>
<h2>ABOUT</h2>
<h1>${config.name}</h1>
<h3>💻 <u><a href="${config.repo}" target="_blank">Github repo</a></u></h3>
<h3>👩‍💻 <u><a href="${config.company_url}" target="_blank">Company Profile</a></u></h3>

<h2>ξ(╯°□°)╯︵🍪</h2>
<h2>CONTACT</h2>
<h3>💌 <u><a href="mailto:${config.email}" target="_blank">${config.email}</a></u></h3>
<h3>🌍 <u><a href="https://github.com/${config.social.github}" target="_blank">github.com/${config.social.github}</a></u></h3>
<h3>🗣 <u><a href="https://linkedin.com/in/${config.social.linkedin}" target="_blank">linkedin.com/in/${config.social.linkedin}</a></u></h3>

<h2>ξ( ❛‿❛)ξ▄︻┻┳═一҉ - -- -- -- 💥 \(˚☐˚”)/</h2>

`;
};

export default sumfetch;
