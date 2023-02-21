import article from './img/article.png'
import currencyConverter from './img/currency-converter.png'
import smktelesandi from './img/smktelesandi.png'
import syntaxNewMember from './img/syntax-new-member.png'
import telsAbsensi from './img/tels-absensi.png'
import telsGraduation from './img/tels-graduation.png'
import telsquiz from './img/telsquiz.png'
import telsVote from './img/tels-vote.png'

const header = {
  homepage: 'https://vinss-droid.github.io',
  title: 'KS.',
}

const about = {
  name: 'Kevin Sipahutar',
  role: 'Web Developer',
  description:
    'Hello! I\'m Kevin Sipahutar. I\'m a passionate coder, a thorough problem solver, and an enthusiastic developer. Currently, I work as a freelancer.',
  resume: 'https://www.cakeresume.com/kevin-sipahutar',
  social: {
    linkedin: 'https://www.linkedin.com/in/kevinsipahutar/',
    github: 'https://github.com/vinss-droid',
  },
}

const projects = [
  {
    name: 'Telsquiz',
    description:
      'Website for the national-level Olympiad.',
    stack: ['Laravel', 'Bootstrap', 'Mysql', 'jQuery'],
    sourceCode: 'https://github.com/vinss-droid',
    livePreview: 'https://telsquiz.com/',
    image: telsquiz
  },
  {
    name: 'SMK TELESANDI BEKASI',
    description:
      'Official Website SMK Telekomunikasi Telesandi Bekasi.',
    stack: ['Bootstrap', 'jQuery', 'VanillaJS'],
    sourceCode: 'https://github.com/vinss-droid/web-smktelesandi',
    livePreview: 'https://www.smkstelekomunikasitelesandi.sch.id/',
    image: smktelesandi
  },
  {
    name: 'Tels-Vote | E-voting',
    description:
      'online voting website for extracurricular chairman election.',
    stack: ['Laravel', 'Bootstrap', 'MySQL', 'jQuery'],
    sourceCode: 'https://github.com/vinss-droid',
    livePreview: 'https://tels-vote.telsquiz.com/',
    image: telsVote
  },
  {
    name: 'Tels-Absensi',
    description:
      'Website for online attendance at SMK Telesandi Bekasi',
    stack: ['Laravel', 'Bootstrap', 'MySQL', 'jQuery'],
    sourceCode: 'https://github.com/vinss-droid',
    livePreview: 'https://tels-absensi.smkstelekomunikasitelesandi.sch.id/',
    image: telsAbsensi
  },
  {
    name: 'Tels-Graduation',
    description:
      'Website for making graduation announcements.',
    stack: ['Laravel', 'Bootstrap', 'MySQL', 'jQuery'],
    sourceCode: 'https://github.com/vinss-droid',
    livePreview: 'https://graduation.smkstelekomunikasitelesandi.sch.id/',
    image: telsGraduation
  },
  {
    name: 'Syntax New Member',
    description:
      'Website for registering new members at syntx.id',
    stack: ['Laravel', 'Bootstrap', 'MySQL', 'jQuery'],
    sourceCode: 'https://github.com/vinss-droid/syntax-new-member',
    livePreview: 'https://new-member.syntx.id/',
    image: syntaxNewMember
  },
  {
    name: 'Currency Converter',
    description:
      'Website to perform currency conversions',
    stack: ['ReactJS', 'Bootstrap', 'GETGEO-API'],
    sourceCode: 'https://github.com/vinss-droid/react-currency-converter',
    livePreview: 'https://currency-converterr.netlify.app/',
    image: currencyConverter
  },
  {
    name: 'SpaceX News',
    description:
      'Website to see the latest SpaceX news.',
    stack: ['ReactJS', 'Bootstrap', 'SpaceflightNewsAPI'],
    sourceCode: 'https://github.com/vinss-droid/react-web-article',
    livePreview: 'https://goto-mars.netlify.app/article',
    image: article
  },
]

const skills = [
  'HTML',
  'CSS',
  'Bootstrap',
  'JavaScript',
  'React',
  'PHP',
  'Laravel',
  'MySQL',
  'RESTful API',
  'Git',
]

const contact = {
  email: 'ks.developer.id@gmail.com',
}

export { header, about, projects, skills, contact }
