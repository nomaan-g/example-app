use PHPUnit\Framework\TestCase;

class SongsTest extends TestCase {

    public function testSongsStaticEndpoint() {
        // Assume you have a function to make an HTTP request to your /songs_static endpoint
        $response = makeHttpRequest('/songs_static');

        // This test is intended to fail
        $this->assertEquals(200, $response->getStatusCode());
    }

    // Helper function to simulate making an HTTP request
    private function makeHttpRequest($endpoint) {
        // This is a simplified example; you might use a library like Guzzle or any other HTTP client
        // to make actual HTTP requests in your application
        // Here, I'm just returning a mock response with a 404 status code for demonstration purposes
        return new MockHttpResponse(404);
    }
}

// MockHttpResponse class for demonstration purposes
class MockHttpResponse {
    private $statusCode;

    public function __construct($statusCode) {
        $this->statusCode = $statusCode;
    }

    public function getStatusCode() {
        return $this->statusCode;
    }
}

