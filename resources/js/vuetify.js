import { createVuetify } from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

const vuetify = createVuetify({
  components,
  directives,
  theme: {
    themes: {
      light: {
        primary: '#3f51b5',
        secondary: '#696969',
        accent: '#8c9eff',
        error: '#b71c1c',
      },
    },
  },
})

export default vuetify