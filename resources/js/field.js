import IndexField from './components/IndexField'

Nova.booting((app, store) => {
  app.component('index-nullable-boolean', IndexField)
})
