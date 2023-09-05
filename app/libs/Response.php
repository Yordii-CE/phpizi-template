<?php

class Response
{
    /**
     * Create the base structure of the response.
     *
     * @param int $status The HTTP status code.
     * @param string $statusText The status text.
     * @param mixed|null $data The response data.
     * @param string|null $details Additional details.
     * @return array response.
     */
    private function createResponse($status, $statusText, $data = null, $details = null)
    {
        $response = [
            "status" => $status,
            "statusText" => $statusText,
            "details" => $details,
        ];

        // Add the "data" key only if the status is 200
        if ($status == 200) {
            $response["data"] = $data;
        }

        return $response;
    }

    /**
     * Respond with a success (200) status.
     *
     * @param mixed|null $data The response data.
     * @param string|null $details Additional details.
     */
    public function ok($data = null, $details = null)
    {
        return $this->createResponse(200, "ok", $data, $details);
    }

    /**
     * Respond with a client error (400) status.
     *
     * @param string|null $details Additional details.
     */
    public function fail($details = null)
    {
        return $this->createResponse(400, "fail", null, $details);
    }

    /**
     * Respond with a server error (500) status.
     *
     * @param string|null $details Additional details.
     */
    public function error($details = null)
    {
        return $this->createResponse(500, "error", null, "Server error: " . $details);
    }
}
