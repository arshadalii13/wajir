class MyApiConnector
{
    public $config = array(
        'api_endpoint' => 'https://herbomaxx.com/api/leads.php',
        'token' => 'Cov0XFyHr1LJ5L9iz',
    );

    public function createLead($data)
    {
        // Build the API request data.
        $apiData = [
            'name' => $data['name'],
            'number' => $data['number'],
            'address' => $data['address'],
            'token' => $this->config['token'],
            'source' => 'tl', // Assuming this is a fixed value.
            'product_id' => 1, // Assuming this is a fixed value.
        ];

        // Make the API request.
        $response = $this->makeApiRequest('GET', $apiData);

        // Handle the API response and return the result.
        return $response;
    }

    // Helper method to make API requests.
    protected function makeApiRequest($method, $data)
    {
        $url = $this->config['api_endpoint'] . '?' . http_build_query($data);

        // Use curl or another library to make the API request.
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $apiResponse = curl_exec($ch);
        curl_close($ch);

        // Parse the API response and return it.
        return $apiResponse;
    }
}
