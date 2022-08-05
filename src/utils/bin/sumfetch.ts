import config from '../../../config.json';

const sumfetch = async (args: string[]): Promise<string> => {
  if (config.ascii === 'khleomix') {
    return `
                                          sumfetch: summary display
  ██████████████████████████████████
██                                  ██
██    ██████████████████████████    ██   c[_]°°°ξ(✿ ᴗ͈_ᴗ͈){zzz}
██  ██░░░░░░░░░░░░░░░░░░░░░░░░░░██  ██
██  ██░░░░░░▒▒░░░░░░░░░░▒▒░░░░░░██  ██
██  ██░░░░░░░░▒▒░░░░░░▒▒░░░░░░░░██  ██    ABOUT
██  ██░░░░░░▒▒▒▒▒▒▒▒▒▒▒▒▒▒░░░░░░██  ██    ${config.name}
██  ██░░░░▒▒▒▒  ▒▒▒▒▒▒  ▒▒▒▒░░░░██  ██   ﰩ ${config.ps1_hostname}
██  ██░░▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒░░██  ██    <u><a href="${config.repo}" target="_blank">Github repo</a></u>
██  ██░░▒▒░░▒▒▒▒▒▒▒▒▒▒▒▒▒▒░░▒▒░░██  ██   爵 <u><a href="${config.company_url}" target="_blank">Company Profile</a></u>
██  ██░░▒▒░░▒▒▒▒░░░░░░░░▒▒░░▒▒░░██  ██
██  ██░░░░░░░░▒▒▒▒░░▒▒▒▒░░░░░░░░██  ██
██  ██░░░░░░░░░░░░░░░░░░░░░░░░░░██  ██   ξ(✿ ᴗ͈ˬᴗ͈)>c[_]
██    ██████████████████████████    ██
██                                  ██
██                                  ██    CONTACT
██    ▒▒            ████████████    ██    <u><a href="mailto:${config.email}" target="_blank">${config.email}</a></u>
██                                  ██    <u><a href="https://github.com/${config.social.github}" target="_blank">github.com/${config.social.github}</a></u>
██                                  ██    <u><a href="https://linkedin.com/in/${config.social.linkedin}" target="_blank">linkedin.com/in/${config.social.linkedin}</a></u>
██████████████████████████████████████
    ██                          ██
    ██████████████████████████████
                                         ξ(✿ ❛‿❛)ξ►╤╦̿═一•Ꮺˊˎ-💥 \(˚☐˚”)/
`;
  } else {
    return `
ξ༼ つ ◕_◕ ༽つ🍪
 sumfetch

⊂(ξ(✿ っ☉ω☉)っ˳.⋅ઇଓ
 ABOUT
 ${config.name}

爵 <u><a href="${config.repo}" target="_blank">Github repo</a></u>

ξ(╯°□°)╯︵🍪
 CONTACT
 <u><a href="mailto:${config.email}" target="_blank">${config.email}</a></u>
 <u><a href="https://github.com/${config.social.github}" target="_blank">github.com/${config.social.github}</a></u>
 <u><a href="https://linkedin.com/in/${config.social.linkedin}" target="_blank">linkedin.com/in/${config.social.linkedin}</a></u>

ξ( ❛‿❛)ξ▄︻┻┳═一҉ - -- -- -- 💥  \(˚☐˚”)/
`;
  }
};

export default sumfetch;
