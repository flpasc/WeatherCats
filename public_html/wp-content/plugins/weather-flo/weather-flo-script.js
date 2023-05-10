document.addEventListener('DOMContentLoaded', function (event) {
	const locationButton = document.getElementById('custom-weather-button')
	const locationInput = document.getElementById('custom-weather-input')

	function fetchWeatherData() {
		const API_KEY = 'ba838de580d82dd8a358c9ee77591f26'
		const API_URL = `https://api.openweathermap.org/data/2.5/weather?q=${locationInput.value}&appid=${API_KEY}`

		fetch(API_URL)
			.then((response) => response.json())
			.then((data) => {
				console.log(data)
				const locationName = data.name
				const conditions = data.weather[0].description
				const temperature = Math.round(data.main.temp - 273.15)
				const humidity = data.main.humidity
				const windspeed = data.wind.speed

				const sunrise = new Date(data.sys.sunrise * 1000).toLocaleTimeString()
				const sunset = new Date(data.sys.sunset * 1000).toLocaleTimeString()

				const iconCode = data.weather[0].icon
				const iconUrl = `https://openweathermap.org/img/w/${iconCode}.png`

				console.log(iconCode)

				document.querySelector('.custom-weather-location').textContent = locationName
				document.querySelector('.custom-weather-conditions').textContent = conditions
				document.querySelector('.custom-weather-temperature').textContent = `${temperature}°C`
				document.querySelector('.custom-weather-humidity').textContent = `Humidity: ${humidity}%`
				document.querySelector('.custom-weather-wind').textContent = `Wind: ${windspeed} m/s`
				document.querySelector('.custom-weather-sunrise').textContent = `Sunrise: ${sunrise}`
				document.querySelector('.custom-weather-sunset').textContent = `Sunset: ${sunset}`
				document.querySelector('.custom-weather-icon').innerHTML = `<img src="${iconUrl}">`
			})
			.catch((error) => console.error(error))
	}

	locationButton.addEventListener('click', fetchWeatherData)
	locationInput.addEventListener('keyup', (event) => {
		if (event.keyCode === 13) {
			fetchWeatherData()
		}
	})
})
