const defaultTheme = require('tailwindcss/defaultTheme');

const colorReset = {
  color: null,
};

function px(min, max) {
  let result = {};
  for (let i = min; i < max + 1; i++) {
    const key = i < 0 ? `-${i}px` : `${i}px`;
    result[key] = `${i}px`;
  }
  return result;
}

const colors = {
  mistyLawn: 'var(--misty-lawn, #DEF7E0)',
  hospitalGreen: 'var(--hospital-green, #9AE3A1)',
  bermudagrass: 'var(--bermudagrass, #64CC6E)',
  lighthouse: 'var(--lighthouse, #F4F4F4)',
  artificialTurf: 'var(--artificial-turf, #47B951)',
  atmosphere: 'var(--atmosphere, #009ddf)',
  winterWizard: 'var(--winter-wizard, #9de2ff)',
  glitterLake: 'var(--glitter-lake, #4AC1F2)',
  blackout: 'var(--black-out, #222222)',
  snowflake: 'var(--snowflake, #f0f0f0)',
  dugong: 'var(--dugong, #707070)',
  orochimaru: 'var(--orochimaru, #d9d9d9)',
  superSilver: 'var(--super-silver, #eeeeee)',
  point: 'var(--atmosphere, #009ddf)',
  funnelCloud: 'var(--funnel-cloud, #113a66)',
  squant: `var(--squant)`,
  kiwiSqueeze: `var(--kiwi-squeeze, #d3eccc)`,
  gardenDawn: `var(--garden-dawn, #eff7ed)`,
};

module.exports = {
  purge: {
    content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  },
  theme: {
    extend: {
      screens: {
        xxl: '1536px',
        labtop: '1440px',
        'max:labtop': { max: '1439px' },
        'max:xxl': { max: '1535px' },
        'max:xl': { max: '1279px' },
        'max:lg': { max: '1023px' },
        'max:md': { max: '767px' },
        'max:sm': { max: '639px' },
      },
      // pixel token
      height: px(0, 300),
      width: px(0, 1000),
      margin: px(0, 300),
      fontSize: px(0, 120),
      padding: {
        'container-x': 'var(--container-px)',
        'container-y': 'var(--container-py)',
        ...px(0, 300),
      },
      gap: px(0, 300),
      maxWidth: px(0, 1000),
      maxHeight: px(0, 1000),
      translate: px(0, 300),
      minWidth: px(0, 1000),
      inset: {
        'container-x': 'var(--container-px)',
        '-container-x': 'calc(var(--container-px) * -1)',
        'container-y': 'var(--container-py)',
        '-container-y': 'calc(var(--container-py) * -1)',
      },
      placeholderColor: {
        current:
          '--tw-placeholder-opacity: 1; color: currentColor; opacity: var(--tw-placeholder-opacity)',
      },
      container: {
        padding: {
          DEFAULT: '2rem',
          sm: '2rem',
          lg: '4rem',
          xl: '5rem',
          '2xl': '7.1875rem',
        },
      },
      colors,
      borderColor: colors,
      backgroundColor: colors,
      gradientColorStops: colors,
      typography: {
        DEFAULT: {
          css: {
            maxWidth: null,
            color: null,
            a: {
              color: null,
              '&:hover': colorReset,
            },
            strong: colorReset,
            string: colorReset,
            h1: colorReset,
            h2: colorReset,
            h3: colorReset,
            h4: colorReset,
            h5: colorReset,
            h6: colorReset,
            pre: null,
            code: null,
            'code::after': null,
            'code::before': null,
            'pre code': null,
          },
        },
      },
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
      gridTemplateColumns: {
        'l1-h-left': '300px minmax(0, 1fr)',
        'l1-h-right': 'minmax(0, 1fr) 300px',
        'l2-h-left': '443px minmax(0, 1fr)',
        'l2-h-right': 'minmax(0, 1fr) 443px',
      },
    },
  },
  variants: {
    extend: {
      opacity: ['disabled'],
      textColor: ['disabled'],
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio'),
  ],
};
