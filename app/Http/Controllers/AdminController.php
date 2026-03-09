<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AdminController extends Controller
{
    /**
     * Dashboard Overview
     */
    public function dashboard()
    {
        $stats = [
            'total_projects' => count(config('portfolio.projects', [])),
            'total_skills' => count(config('portfolio.skills.frontend', [])) + 
                            count(config('portfolio.skills.backend', [])) + 
                            count(config('portfolio.skills.tools', [])),
            'total_timeline' => count(config('portfolio.timeline', [])),
            'unread_messages' => ContactMessage::where('read', false)->count(),
            'total_messages' => ContactMessage::count(),
        ];

        $recentMessages = ContactMessage::orderBy('created_at', 'desc')->limit(5)->get();

        return view('admin.dashboard', compact('stats', 'recentMessages'));
    }

    /**
     * Projects Management
     */
    public function projectsIndex()
    {
        $projects = config('portfolio.projects', []);
        return view('admin.projects.index', compact('projects'));
    }

    public function projectsStore(Request $request)
    {
        $projects = config('portfolio.projects', []);
        
        $newProject = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category' => $request->input('category', 'web'),
            'technologies' => array_filter(explode(',', $request->input('technologies'))),
            'image' => $request->input('image', '📁'),
            'gradient' => $request->input('gradient', 'from-blue-500 to-indigo-600'),
            'link' => $request->input('link', '#'),
        ];
        
        $projects[] = $newProject;
        
        $this->updateConfig('portfolio.projects', $projects);
        
        return redirect()->route('admin.projects.index')->with('success', 'Project added successfully!');
    }

    public function projectsUpdate(Request $request, $index)
    {
        $projects = config('portfolio.projects', []);
        
        if (!isset($projects[$index])) {
            return redirect()->route('admin.projects.index')->with('error', 'Project not found!');
        }
        
        $projects[$index] = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category' => $request->input('category', 'web'),
            'technologies' => array_filter(explode(',', $request->input('technologies'))),
            'image' => $request->input('image', '📁'),
            'gradient' => $request->input('gradient', 'from-blue-500 to-indigo-600'),
            'link' => $request->input('link', '#'),
        ];
        
        $this->updateConfig('portfolio.projects', $projects);
        
        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully!');
    }

    public function projectsDestroy($index)
    {
        $projects = config('portfolio.projects', []);
        
        if (!isset($projects[$index])) {
            return redirect()->route('admin.projects.index')->with('error', 'Project not found!');
        }
        
        array_splice($projects, $index, 1);
        
        $this->updateConfig('portfolio.projects', $projects);
        
        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully!');
    }

    /**
     * Skills Management
     */
    public function skillsIndex()
    {
        $skills = config('portfolio.skills', []);
        return view('admin.skills.index', compact('skills'));
    }

    public function skillsUpdate(Request $request)
    {
        $skills = [
            'frontend' => array_filter(array_map('trim', explode("\n", $request->input('frontend')))),
            'backend' => array_filter(array_map('trim', explode("\n", $request->input('backend')))),
            'tools' => array_filter(array_map('trim', explode("\n", $request->input('tools')))),
        ];
        
        $this->updateConfig('portfolio.skills', $skills);
        
        return redirect()->route('admin.skills.index')->with('success', 'Skills updated successfully!');
    }

    /**
     * Timeline Management
     */
    public function timelineIndex()
    {
        $timeline = config('portfolio.timeline', []);
        return view('admin.timeline.index', compact('timeline'));
    }

    public function timelineStore(Request $request)
    {
        $timeline = config('portfolio.timeline', []);
        
        $newEntry = [
            'period' => $request->input('period'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ];
        
        if ($request->has('is_education')) {
            $newEntry['is_education'] = true;
        }
        
        $timeline[] = $newEntry;
        
        $this->updateConfig('portfolio.timeline', $timeline);
        
        return redirect()->route('admin.timeline.index')->with('success', 'Timeline entry added successfully!');
    }

    public function timelineUpdate(Request $request, $index)
    {
        $timeline = config('portfolio.timeline', []);
        
        if (!isset($timeline[$index])) {
            return redirect()->route('admin.timeline.index')->with('error', 'Timeline entry not found!');
        }
        
        $timeline[$index] = [
            'period' => $request->input('period'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ];
        
        if ($request->has('is_education')) {
            $timeline[$index]['is_education'] = true;
        }
        
        $this->updateConfig('portfolio.timeline', $timeline);
        
        return redirect()->route('admin.timeline.index')->with('success', 'Timeline entry updated successfully!');
    }

    public function timelineDestroy($index)
    {
        $timeline = config('portfolio.timeline', []);
        
        if (!isset($timeline[$index])) {
            return redirect()->route('admin.timeline.index')->with('error', 'Timeline entry not found!');
        }
        
        array_splice($timeline, $index, 1);
        
        $this->updateConfig('portfolio.timeline', $timeline);
        
        return redirect()->route('admin.timeline.index')->with('success', 'Timeline entry deleted successfully!');
    }

    /**
     * Messages Management
     */
    public function messagesIndex()
    {
        $messages = ContactMessage::orderBy('created_at', 'desc')->get();
        return view('admin.messages.index', compact('messages'));
    }

    public function messagesShow($id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->update(['read' => true]);
        
        return view('admin.messages.show', compact('message'));
    }

    public function messagesDestroy($id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->delete();
        
        return redirect()->route('admin.messages.index')->with('success', 'Message deleted successfully!');
    }

    /**
     * Settings Management
     */
    public function settingsIndex()
    {
        $settings = [
            'name' => config('portfolio.name'),
            'title' => config('portfolio.title'),
            'tagline' => config('portfolio.tagline'),
            'description' => config('portfolio.description'),
            'email' => config('portfolio.email'),
            'phone' => config('portfolio.phone'),
            'location' => config('portfolio.location'),
            'availability' => config('portfolio.availability'),
            'resume_url' => config('portfolio.resume_url'),
            'social' => config('portfolio.social'),
            'stats' => config('portfolio.stats'),
            'seo' => config('portfolio.seo'),
        ];
        
        return view('admin.settings.index', compact('settings'));
    }

    public function settingsUpdate(Request $request)
    {
        // Update site info
        $this->updateEnvVars([
            'PORTFOLIO_NAME' => $request->input('name'),
            'PORTFOLIO_TITLE' => $request->input('title'),
            'PORTFOLIO_TAGLINE' => $request->input('tagline'),
            'PORTFOLIO_DESCRIPTION' => $request->input('description'),
            'PORTFOLIO_EMAIL' => $request->input('email'),
            'PORTFOLIO_PHONE' => $request->input('phone'),
            'PORTFOLIO_LOCATION' => $request->input('location'),
            'PORTFOLIO_AVAILABILITY' => $request->input('availability'),
            'PORTFOLIO_RESUME_URL' => $request->input('resume_url'),
        ]);
        
        // Update stats
        $stats = [
            'years_experience' => $request->input('years_experience'),
            'projects_completed' => $request->input('projects_completed'),
            'happy_clients' => $request->input('happy_clients'),
            'satisfaction' => $request->input('satisfaction'),
        ];
        $this->updateConfig('portfolio.stats', $stats);
        
        // Update social
        $social = [
            'github' => $request->input('github'),
            'linkedin' => $request->input('linkedin'),
            'twitter' => $request->input('twitter'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
        ];
        $this->updateConfig('portfolio.social', $social);
        
        // Update SEO
        $seo = [
            'site_name' => $request->input('site_name'),
            'title_separator' => '|',
            'default_title' => $request->input('default_title'),
            'default_description' => $request->input('default_description'),
        ];
        $this->updateConfig('portfolio.seo', $seo);
        
        // Clear cache
        Cache::flush();
        
        return redirect()->route('admin.settings.index')->with('success', 'Settings updated successfully!');
    }

    /**
     * Helper function to update config values
     */
    private function updateConfig($key, $value)
    {
        $configPath = config_path('portfolio.php');
        $config = include $configPath;
        
        // Set nested value
        $keys = explode('.', $key);
        $current = &$config;
        foreach ($keys as $k) {
            $current = &$current[$k];
        }
        $current = $value;
        
        // Write back to config file
        $this->writeConfigFile($configPath, $config);
        
        // Clear config cache
        Cache::flush();
    }

    /**
     * Helper function to write config file
     */
    private function writeConfigFile($path, $array)
    {
        $content = "<?php\n\nreturn [\n";
        $content .= $this->arrayToString($array, 1);
        $content .= "];\n";
        
        file_put_contents($path, $content);
    }

    /**
     * Helper function to convert array to config string
     */
    private function arrayToString($array, $indent = 0)
    {
        $content = '';
        $spaces = str_repeat('    ', $indent);
        
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $content .= "{$spaces}'{$key}' => [\n";
                $content .= $this->arrayToString($value, $indent + 1);
                $content .= "{$spaces}],\n";
            } elseif (is_string($value)) {
                $content .= "{$spaces}'{$key}' => '{$value}',\n";
            } elseif (is_bool($value)) {
                $content .= "{$spaces}'{$key}' => " . ($value ? 'true' : 'false') . ",\n";
            } else {
                $content .= "{$spaces}'{$key}' => {$value},\n";
            }
        }
        
        return $content;
    }

    /**
     * Helper function to update .env file
     */
    private function updateEnvVars($vars)
    {
        $envPath = base_path('.env');
        $envContent = file_get_contents($envPath);
        
        foreach ($vars as $key => $value) {
            $pattern = "/^{$key}=.*$/m";
            if (preg_match($pattern, $envContent)) {
                $envContent = preg_replace($pattern, "{$key}={$value}", $envContent);
            } else {
                $envContent .= "\n{$key}={$value}";
            }
        }
        
        file_put_contents($envPath, $envContent);
        
        // Clear config cache
        Cache::flush();
    }
}
